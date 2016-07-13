<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Metatags para suporte a UTF-8 e responsividade -->
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title><?php wp_title(''); ?></title>

        <!-- CSS do Foundation Framework -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css" />

        <!-- CSS do tema -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

        <!-- WebFonts -->
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald' type='text/css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>

        <!-- Biblioteca JavaScript Modernizr (dependência do Foundation) -->
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container row"> <!-- Container -->
            <div class="cabecalho small-12 large-12 column"> <!-- Cabeçalho -->
                <div class="row">
                    <div class="logo small-12 medium-8 large-7 left column">
                        <?php
                        function meublog_the_custom_logo() {
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        }
                        meublog_the_custom_logo();
                        ?>
                    </div>
                    <!-- Busca -->
                    <div class="busca small-10 medium-4 large-5 right column show-for-medium">
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
            <!-- Menu de navegação -->
            <div class="barra-menu small-12 large-12 column">
                <div class="top-bar" id="main-menu">
                    <div class="top-bar-left">
                        <!-- <ul class="dropdown menu" data-dropdown-menu>
                            <li class="menu-text">Site Title</li>
                        </ul> -->
                        <?php 
                            wp_nav_menu(array(
                                'container' => false,
                                'menu' => __( 'Cabeçalho', 'textdomain' ),
                                'menu_class' => 'dropdown menu',
                                'theme_location' => 'topbar-menu',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
    //Recommend setting this to false, but if you need a fallback...
                                'fallback_cb' => 'f6_topbar_menu_fallback',
                                'walker' => new F6_TOPBAR_MENU_WALKER(),
                                ));
                         ?>
                    </div>
                    <div class="top-bar-right">
                        <!-- <ul class="menu show-for-small-only">
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
                        </ul> -->
                        
                    </div>
                </div>
            </div>