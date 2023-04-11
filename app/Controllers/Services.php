<?php
    namespace App\Controllers;

    class Services extends BaseController
    {
        public function development()
        {
            $uri = service('uri');
            $lien = $uri->getSegment(1); 
            $data = [
                'title' => "Développement web et applications",
                'maclasse' => $lien,
            ];
            return view('template-parts/header', $data)
            . view('template-parts/services/development')
            . view('template-parts/footer');
        }

        public function marketing()
        {
            $uri = service('uri');
            $lien = $uri->getSegment(1);
            $data = [
                'title' => "Webmarketing",
                'maclasse' => $lien,
            ];
            return view('template-parts/header', $data)
            . view('template-parts/services/marketing')
            . view('template-parts/footer');
        }
        public function design()
        {
            $uri = service('uri');
            $lien = $uri->getSegment(1);
            $data = [
                'title' => 'Design et création graphique',
                'maclasse' => $lien,
            ];
            return view('template-parts/header', $data)
            . view('template-parts/services/design')
            . view('template-parts/footer');
        }
        public function print()
        {
            $uri = service('uri');
            $lien = $uri->getSegment(1);
            $data = [
                'title' => "Création de supports et PLV",
                'maclasse' => $lien,
            ];
            return view('template-parts/header', $data)
            . view('template-parts/services/print')
            . view('template-parts/footer');
        }

    }

    
    