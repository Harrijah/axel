<?php
    namespace App\Controllers;
    use App\Controllers\Image;
    use CodeIgniter\HTTP\ResponseInterface;
    use CodeIgniter\HTTP\CURLRequest;

    class Accueil extends BaseController
    {
        public function accueil()
        {
            $data = [
                'title' => 'accueil',
                'maclasse' => ''
            ];
            return view('template-parts/header', $data)
            . view('template-parts/accueil/banneer01')
            . view('template-parts/accueil/banneer02')
            . view('template-parts/accueil/banneer03')
            . view('template-parts/footer');
        }

        public function getDuration()
        {
            $googleApiKey = 'AIzaSyCGCcE2Xk-MhhaV9-hb8KoexuZoEupGo1I';
            
            // Obtenez les adresses depuis la requête POST
            $origins = $this->request->getPost('origins');
            $destinations = $this->request->getPost('destinations');

            if (empty($origins) || empty($destinations)) {
                return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                                    ->setJSON(['error' => 'Origine ou destination manquante']);
            }

            // URL de l'API Google Distance Matrix avec les paramètres
            $url = "https://maps.googleapis.com/maps/api/distancematrix/json?key=$googleApiKey&origins=" . urlencode($origins) . "&destinations=" . urlencode($destinations) . "&mode=driving";

            // Initialisez une requête cURL
            $client = \Config\Services::curlrequest();
            
            try {
                $response = $client->get($url);
                $json = json_decode($response->getBody());

                return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($json);
            } catch (\Exception $e) {
                return $this->response->setHeader('Access-Control-Allow-Origin', 'http://localhost:3000')->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                                    ->setJSON(['error' => 'Erreur lors de la requête vers Google API']);
            }




        }




    }

