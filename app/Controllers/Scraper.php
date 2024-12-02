<?php

namespace App\Controllers;

use App\Libraries\SimpleXLSX;
use App\Libraries\xlsxwriter;

class Scraper extends BaseController
{
    public function index()
    {
        // Charge la vue pour téléverser le fichier
        return view('scraper_form');
    }

    public function process()
    {
        // Vérifiez si un fichier a été téléversé
        if (!isset($_FILES['excel_file']) || $_FILES['excel_file']['error'] !== UPLOAD_ERR_OK) {
            $error = $_FILES['excel_file']['error'] ?? 'Fichier non défini';
            echo "Erreur lors du téléversement du fichier. Code erreur : $error";
            return;
        }

        // Vérifiez la taille du fichier (par exemple, max 10 Mo)
        if ($_FILES['excel_file']['size'] > 10 * 1024 * 1024) {
            echo "Le fichier est trop volumineux. Taille maximale autorisée : 10 Mo.";
            return;
        }

        $filePath = $_FILES['excel_file']['tmp_name'];

        // Chargez et parsez le fichier Excel
        $xlsx = SimpleXLSX::parse($filePath);
        if (!$xlsx) {
            echo 'Erreur lors du chargement du fichier : ' . SimpleXLSX::parseError();
            return;
        }

        $rows = $xlsx->rows();
        if (empty($rows)) {
            echo "Le fichier Excel est vide ou corrompu.";
            return;
        }

        // Préparez les données de sortie
        $output = [];
        $output[] = array_merge($rows[0], ['Liens LinkedIn trouvés']); // Ajouter une colonne pour les liens LinkedIn

        // Parcourez les lignes du fichier (en ignorant la première ligne, qui est l'entête)
        foreach (array_slice($rows, 1) as $row) {
            $url = $row[0] ?? ''; // Assume que le site web est dans la première colonne
            $linkedinLinks = $this->scrapeLinkedIn($url);
            $output[] = array_merge($row, [implode(', ', $linkedinLinks)]);
        }

        // Générer le fichier Excel de sortie
        $writer = new XLSXWriter();
        $writer->writeSheetHeader('Sheet1', array_fill(0, count($output[0]), 'string')); // Colonnes de type texte

        foreach ($output as $line) {
            $writer->writeSheetRow('Sheet1', $line);
        }

        $outputPath = WRITEPATH . 'uploads/output_' . time() . '.xlsx'; // Écrire dans le dossier writable/uploads
        $writer->writeToFile($outputPath);

        echo "Le fichier traité est disponible ici : <a href='" . base_url('uploads/' . basename($outputPath)) . "'>Télécharger le fichier</a>";
    }

    private function scrapeLinkedIn($url)
    {
        if (empty($url)) return [];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Suivre les redirections
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Timeout de 10 secondes
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; ScraperBot/1.0)'); // Fournir un User-Agent
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200 || !$response) {
            return [];
        }

        // Chargez la réponse dans un parseur HTML
        include_once APPPATH . 'Libraries/simple_html_dom.php';
        $html = str_get_html($response);
        if (!$html) return [];

        // Récupérez les liens LinkedIn
        $links = [];
        foreach ($html->find('a') as $a) {
            if (isset($a->href) && strpos($a->href, 'linkedin.com') !== false) {
                $links[] = $a->href;
            }
        }

        return array_unique($links); // Éliminer les doublons
    }
}
