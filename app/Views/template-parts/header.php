<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome4/css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome4/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome5/css/fontawesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome5/css/fontawesome.min.css'); ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('styles/index.css'); ?>">
    <title>Bienvenue sur Axel</title>
</head>
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DLVBHJWVDN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DLVBHJWVDN');
</script>

<body>
    <nav class="navprinc">
        <div class="logo-image">
            <a href="<?php echo base_url('/') ?>">
                <img src="<?php echo base_url('image/resized/logo.fw.png') ?>" alt="logo" class="logo">
            </a>
        </div>
        <div class="menu-section">
            <ul class="">
                <li class="menu"><a href="<?php echo base_url('/') ?>" class="menubutton">Accueil</a></li>
                <li class="menu"><a href="<?php echo base_url('/') ?>" class="menubutton">A propos de nous</a></li>
                <li class="menu dropmoth">
                    <div class="menu-services">Nos services</div>
                    <ul class="menu-drop">
                        <li class="deroul-menu"><a href="<?php echo base_url('development') ?>" class="menubutton">Développement web & app</a></li>
                        <li class="deroul-menu"><a href="<?php echo base_url('marketing') ?>" class="menubutton">Marketing digital</a></li>
                        <li class="deroul-menu"><a href="<?php echo base_url('design') ?>" class="menubutton">Création graphique</a></li>
                        <li class="deroul-menu"><a href="<?php echo base_url('print') ?>" class="menubutton">Supports et PLV</a></li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#" class="menubutton">Blog</a>
                </li>
                <li class="menu">
                    <a href="#" class="menubutton" id="modalbutton">Nous contacter</a>
                </li>
            </ul>
        </div>
        <?php //echo App\Controllers\Image::resize_image('logo.fw.png', 80, 80);  ?>
    </nav>
    
    


    
    
