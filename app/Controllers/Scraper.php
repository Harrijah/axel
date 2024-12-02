<?php

Namespace App\Controllers;

defined('BASEPATH') OR exit('No direct script access allowed');

class Scraper extends Basecontroller {
    
    public function index() {
        // Charge la vue pour téléverser le fichier
        $this->load->view('scraper_form');
    }

    public function process() {
        $this->load->library('SimpleXLSX');
        $this->load->library('XLSXWriter');

        // Vérifier si un fichier a été téléversé
        if (isset($_FILES['excel_file']['tmp_name']) && $_FILES['excel_file']['error'] === UPLOAD_ERR_OK) {
            $filePath = $_FILES['excel_file']['tmp_name'];

            // Charger le fichier Excel
            $xlsx = SimpleXLSX::parse($filePath);
            if (!$xlsx) {
                echo 'Erreur lors du chargement du fichier : ' . SimpleXLSX::parseError();
                return;
            }

            $rows = $xlsx->rows();
            $output = [];
            $output[] = array_merge($rows[0], ['Liens LinkedIn trouvés']); // Ajouter une colonne

            foreach (array_slice($rows, 1) as $row) {
                $url = $row[0]; // Assume que le site web est dans la première colonne
                $linkedinLinks = $this->scrapeLinkedIn($url);
                $output[] = array_merge($row, [implode(', ', $linkedinLinks)]);
            }

            // Générer le fichier Excel de sortie
            $writer = new XLSXWriter();
            foreach ($output as $line) {
                $writer->writeSheetRow('Sheet1', $line);
            }

            $outputPath = FCPATH . 'uploads/output.xlsx';
            $writer->writeToFile($outputPath);

            echo "Le fichier traité est disponible ici : <a href='" . base_url('uploads/output.xlsx') . "'>Télécharger le fichier</a>";
        } else {
            echo 'Veuillez téléverser un fichier valide.';
        }
    }

    private function scrapeLinkedIn($url) {
        if (empty($url)) return [];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $response = curl_exec($ch);
        curl_close($ch);

        if (!$response) return [];

        // Charger la réponse dans un parseur HTML
        include_once APPPATH . 'libraries/simple_html_dom.php';
        $html = str_get_html($response);
        if (!$html) return [];

        $links = [];
        foreach ($html->find('a') as $a) {
            if (strpos($a->href, 'linkedin.com') !== false) {
                $links[] = $a->href;
            }
        }

        return array_unique($links);
    }
}
