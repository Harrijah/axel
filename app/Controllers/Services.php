<?php
    namespace App\Controllers;

    class Services extends BaseController
    {
        public function developpement()
        {
            $data = [];
            return view('template-parts/header', $data)
            . view('template-parts/services/banniere01')
            // . view('template-parts/services/choisir')
            . view('template-parts/footer');
        }
    }

    
    