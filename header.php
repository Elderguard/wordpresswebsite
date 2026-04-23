<!DOCTYPE html>
<html>

<head>
    <?php
        wp_head();
    ?>
    <?php
        $title = get_the_title();
        if( $title == '' ) {
            $title = 'Home';
        }
    ?>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Title -->
    <title><?php echo $title; ?></title>
    <!-- References -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/dankiwordpress/style.css">
</head>

<body>

    <section class="top">
        <div class="center">
            <header>
                <div class="logo"><a href="<?php echo '/wordpress' ?>"><img src="<?php echo get_theme_root_uri(); ?>/dankiwordpress/images/logo.png" alt="Logo da empresa fictícia" /></a></div><!-- logo -->
            </header>
            <ul class="menu-desktop">
                <li><a href="/wordpress/">Home</a></li>
                <li><a href="/wordpress/about">Sobre</a></li>
                <li><a href="/wordpress/contact">Contato</a></li>
            </ul><!-- menu -->
            
            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="/wordpress/">Home</a></li>
                    <li><a href="/wordpress/about">Sobre</a></li>
                    <li><a href="/wordpress/contact">Contato</a></li>
                </ul><!--menu-mobile-->
            </div>