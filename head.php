<?php include 'bootstrap.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Core Meta Data -->
        <meta name="author" content="<?= $config->author; ?>">
        <meta name="description" content="<?= $config->description; ?>">
        <meta name="keywords" content="<?= $config->keywords; ?>">

        <!-- Facebook Tags -->
        <meta property="og:description" content="<?= $config->description; ?>">
        <meta property="og:image" content="<?= $config->siteUrl; ?>/avatar_face.png">
        <meta property="og:site_name" content="<?= $config->siteName; ?>">
        <meta property="og:title" content="<?= $config->pageTitle; ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= 'http://' . $_SERVER["SERVER_NAME"] ?>">

        <!-- Twitter tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="<?= $config->siteUrl; ?>">
        <meta name="twitter:creator" content="<?= $config->userTwitter; ?>">
        <meta name="twitter:title" content="<?= $config->pageTitle; ?>">
        <meta name="twitter:description" content="<?= $config->description; ?>">
        <meta name="twitter:image" content="<?= 'http://' . $_SERVER["SERVER_NAME"] ?>/avatar_face.png">

        <!-- Humans -->
        <link rel="author" href="humans.txt" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
        <link rel="shortcut icon" href="<?= 'http://' . $_SERVER["SERVER_NAME"] ?>/favicon.png" type="image/png"> <!-- link absoluto do favicon -->

        <!-- Aplique os CSS em css.php -->
        <?php include 'css.php'; ?>

        <meta charset="UTF-8">
        <title>Starter Template - Materialize</title>
    </head> 
    <body>
        <!--[if lt IE 7]>
        <div class="cf-msn"><p class="chromeframe">Você está usando um navegador <strong>desatualizado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">ative o Google Chrome Frame</a> para melhorar a sua experiência.</p></div>
        <![endif]-->
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Navbar Link</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#">Navbar Link</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Starter Template</h1>
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
                <div class="row center">
                    <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
                </div>
                <br><br>

            </div>
        </div>