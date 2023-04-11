<?php
    namespace App\Controllers;

    class Services extends BaseController
    {
        public function development()
        {
            $data = [
                'tile' => "Développement web et applications",
            ];
            return view('template-parts/header', $data)
            . view('template-parts/services/development')
            // . view('template-parts/services/choisir')
            . view('template-parts/footer');
        }

        public function marketing()
        {
            $data = [
                'tile' => "Webmarketing",
            ];
            return view('template-parts/header', $data)
            . view('template-parts/services/marketing')
            . view('template-parts/footer');
        }
        public function design()
        {
            // $uri = service('uri');
            // if ($uri->getSegment(1) === 'development') {
            //     echo "ok";
            // }
            $data = [
                'tile' => "Design et création graphique",
            ];
            return view('template-parts/header', $data)
            . view('template-parts/services/design')
            . view('template-parts/footer');
        }
        public function print()
        {
            $data = [
                'tile' => "Création de supports et PLV",
            ];
            return view('template-parts/header', $data)
            . view('template-parts/services/print')
            . view('template-parts/footer');
        }

    }

    
    