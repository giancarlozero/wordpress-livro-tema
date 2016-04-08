<!doctype html>
<html class="no-js" lang="pt_BR">
    <head>
        <!-- Metatags do Foundation para suporte a UTF-8 e responsividade -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Meu Blog</title>

        <!-- CSS do Foundation Framework -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css" />

        <!-- CSS do tema -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

        <!-- WebFonts -->
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <!-- Bibioteca JavaScript Modernizr (dependência do Foundation) -->
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body>
        <div class="container row"> <!-- Container -->
            <div class="cabecalho small-12 large-12 column"> <!-- Cabeçalho -->
                <div class="row">
                    <div class="logo small-12 medium-8 large-7 left column">
                        <a href="#"><img src="http://placehold.it/350x150?text=Logo"></a>
                    </div>
                    <div class="busca small-10 medium-4 large-5 right column show-for-medium"> <!-- Busca -->
                        <form>
                            <div class="row collapse">
                                <div class="small-10 columns">
                                    <input type="text">
                                </div>
                                <div class="small-2 columns">
                                    <input type="submit" class="button postfix" value="BUSCAR" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="barra-menu small-12 large-12 column">
                <div class="top-bar" id="main-menu">
                    <div class="top-bar-left">
                        <ul class="dropdown menu" data-dropdown-menu>
                            <!-- <li class="menu-text">Site Title</li> -->
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="menu show-for-small-only">
                            <li><input type="search" placeholder="Busca"></li>
                            <li><button type="button" class="button">Busca</button></li>
                        </ul>
                        <ul class="menu vertical medium-horizontal expanded" data-responsive-menu="drilldown medium-dropdown">
                            <li class="has-submenu">
                                <a href="#">Opção 01</a>
                                <ul class="submenu menu vertical" data-submenu>
                                    <li><a href="#">Opção 01</a></li>
                                    <li><a href="#">Opção 02</a></li>
                                    <li><a href="#">Opção 03</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Opção 02</a></li>
                            <li><a href="#">Opção 03</a></li>
                            <li><a href="#">Opção 04</a></li>
                            <li><a href="#">Opção 05</a></li>
                        </ul>
                    </div>
                </div>
            </div>