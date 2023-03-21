<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome4/css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('font-awesome/font-awesome4/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <title>Bienvenue sur Axel</title>
</head>
<body>
    <nav class="navprinc">
        <div class="logo-image">
            <img src="<?php echo base_url('image/resized/logo.fw.png') ?>" alt="logo" class="logo">
        </div>
        <div class="menu-section">
            <!-- <div class="testt"></div> -->
            <ul class="menu">
                <li><a href="#" class="navmenu">Nos services</a></li><li><a href="#" class="navmenu" id="modalbutton">Nous contacter</a></li>
            </ul>
        </div>
        <?php //echo App\Controllers\Image::resize_image('logo.fw.png', 80, 80);  ?>
    </nav>
    


    
    
