<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Meta Tags gerais -->
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Título -->
        <title><?php wp_title(''); ?></title>

        <!-- WebFonts -->
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <!-- CSS do Tema -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

        <!-- CSS do Foundation Framework -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" />
        
        <!-- Biblioteca JavaScript Modernizr (dependência do Foundation) -->
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container row">
            <!-- Cabeçalho -->
            <header>
                <div class="cabecalho small-12 small-centered medium-7 large-7 left column">
                    <?php
                        // Função de logotipo personalizado
                        function meublog_the_custom_logo() {
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        }

                        // Chamada à esta função
                        meublog_the_custom_logo();
                    ?>
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
                    <div class="menu-navegacao row">
                        <nav class="top-bar" data-topbar role="navigation">
                            <ul class="title-area">
                                <li class="name">
                                    <!--<h1><a href="#">My Site</a></h1>-->
                                </li>
                                <li class="toggle-topbar"><a href="#"><span>Menu</span></a></li>
                            </ul>
                            <section class="top-bar-section">
                                <!-- Botões do menu -->
                                <?php wp_nav_menu(array(
                                    'theme_location'    => 'header-menu',
                                    'container'         => false,
                                    'menu_class'        => 'links-menu left',
                                    'walker'            => new Foundation_Walker_Nav_Menu(),
                                    'fallback_cb'       => 'wp_page_menu();'
                                )); ?>
                            </section>
                        </nav>
                    </div>
                </div>
            </header>