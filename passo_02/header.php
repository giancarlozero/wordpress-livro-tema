<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <!-- Meta Tags gerais -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Título -->
        <title>Meu Blog</title>

        <!-- WebFonts -->
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <!-- CSS do Tema -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

        <!-- CSS do Foundation Framework -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" />

        <!-- Biblioteca JavaScript Modernizr (dependência do Foundation) -->
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body>
        <div class="container row">
            <!-- Cabeçalho -->
            <header>
                <div class="cabecalho small-12 small-centered medium-7 large-7 left column">
                    <a href="#">
                        <img src="http://placehold.it/350x150?text=Logo">
                    </a>
                </div>
                <div class="busca small-centered medium-5 large-5 right column show-for-medium-up">
                    <div class="row collapse">
                        <div class="small-10 columns">
                        <input type="text" placeholder="Busca">
                        </div>
                        <div class="small-2 columns">
                            <a href="#" class="button postfix">Buscar</a>
                        </div>
                    </div>
                </div>
                <!-- Menu de navegação -->
                <div class="barra-menu small-12 medium-12 large-12 column">
                    <nav class="top-bar" data-topbar role="navigation">
                        <ul class="title-area">
                            <li class="name">
                                <!--<h1><a href="#">My Site</a></h1>-->
                            </li>
                            <li class="toggle-topbar"><a href="#"><span>Menu</span></a></li>
                        </ul>
                        <section class="top-bar-section">
                            <ul>
                                <li><a href="#">Opção 01</a></li>
                                <li><a href="#">Opção 02</a></li>
                                <li><a href="#">Opção 03</a></li>
                                <li><a href="#">Opção 04</a></li>
                                <li><a href="#">Opção 05</a></li>
                                <li><a href="#">Opção 06</a></li>
                                <li><a href="#">Opção 07</a></li>
                                <li><a href="#">Opção 08</a></li>
                                <li><a href="#">Opção 09</a></li>
                                <li><a href="#">Opção 10</a></li>
                            </ul>
                        </section>
                    </nav>
                </div>
            </header>