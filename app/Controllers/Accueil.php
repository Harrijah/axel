<?php
    namespace App\Controllers;

    class Accueil extends BaseController
    {
        public function accueil()
        {
            return view('template-parts/header')
            . view('template-parts/banneer01')
            . view('template-parts/banneer02')
            . view('template-parts/footer');
        }
    }