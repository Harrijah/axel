<?php
    namespace App\Controllers;
    use App\Controllers\Image;

    class Accueil extends BaseController
    {
        public function accueil()
        {
            $data = [];
            return view('template-parts/header', $data)
            . view('template-parts/accueil/banneer01')
            . view('template-parts/accueil/banneer02')
            . view('template-parts/accueil/banneer03')
            . view('template-parts/footer');
        }




    }