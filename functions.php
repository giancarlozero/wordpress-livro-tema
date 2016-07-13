<?php

/* Título do site */
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );

function baw_hack_wp_title_for_home( $title )
{
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Meu Blog', 'theme_domain' ) . ' - ' . get_bloginfo( 'description' );
    }
    return $title;
}

/* Logotipo do site */
function custom_logo_setup() {
    
    add_theme_support( 'custom-logo', array(
        'height'      => 150,
        'width'       => 350,
        'flex-width' => true,
    ));

}
add_action( 'after_setup_theme', 'custom_logo_setup' );

/* Walker Nav para o menu de navegação (compatível com o Foundation) */
class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu {   
    /*
    * Adiciona uma classe para menu vertical e atributos de dados aos submenus
    */

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
    }
}

    // Fallback opcional
    function f6_topbar_menu_fallback($args) {
    /*
    * Instancia uma nova classse Page Walker ao invés de aplicar um filtro
    * à Função "wp_page_menu" no evento caso haja múltiplos menus ativos
    * no Tema.
    */

    $walker_page = new Walker_Page();
    $fallback = $walker_page->walk(get_pages(), 0);
    $fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);

    echo '<ul class="dropdown menu data-dropdown-menu">'.$fallback.'</ul>';
}

/* Registrando menu de navegação */
function menu_setup() {
    add_action( 'init', 'register_menu' );

    // Adiciona suporte a menus personalizados no Tema
    add_theme_support( 'menus' );
}

function register_menu() {
    // Cria um novo local de exibição do menu, chamado "Cabeçalho"
    register_nav_menu( 'topbar-menu', __( 'Cabeçalho','textdomain' ) );
}

// Adiciona o menu às configurações do WordPress (Aparência > Menus)
add_action( 'after_setup_theme', 'menu_setup' );