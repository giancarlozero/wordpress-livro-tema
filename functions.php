<?php

/* Título do site */
add_filter( 'wp_title', 'wp_title_for_home' );

function wp_title_for_home( $title )
{
    if( empty( $title ) && ( is_home() || is_front_page() ) ) {
        return __( 'Meu blog!', 'theme_domain' ) . ' - ' . get_bloginfo( 'description' );
    }
    return $title;
}

/* Logo personalizado */
function custom_logo_setup() {    
    add_theme_support( 'custom-logo', array(
        'height'      => 150, // Altura do logotipo
        'width'       => 350, // Largura do logotipo
        'flex-width' => true, // Largura flexível do logotipo
    ));
}
add_action( 'after_setup_theme', 'custom_logo_setup' );

add_theme_support('menus');

/* Adicionar suporte a menus personalizados no Tema */
function register_my_menu(){
    register_nav_menu('header-menu', __('Menu do Cabeçalho'));
}

/* Menu principal - adaptação para Foundation Framework */
function foundation_nav_menu_classes($classes, $item){
    if (in_array("current-menu-item", $classes)){
        array_push($classes, "active");
    }

    if (in_array("menu-item-has-children", $classes)){
        array_push($classes, "has-dropdown not-click");
    }
    
    return $classes;
}

add_action('init', 'register_my_menu'); // Chamada da função de registro de menu personalizado
add_filter('nav_menu_css_class', 'foundation_nav_menu_classes', 10, 2);

/* Submenus do menu principal - adaptação para Foundation Framework */
class Foundation_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()){
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown sub-menu menu-lvl-$depth\">\n";
    }
}

function foundation_load_styles(){
    wp_enqueue_style("main_css", get_template_directory_uri() . '/style.css');
    wp_enqueue_style("foundation_css", get_template_directory_uri() . '/css/foundation.css');
}

add_action('wp_enqueue_scripts', 'foundation_load_styles');

function foundation_load_scripts(){
    wp_enqueue_script("modernizr_js", get_template_directory_uri() . '/js/vendor/modernizr.js', '', '', false);
    wp_enqueue_script("fastclick_js", get_template_directory_uri() . '/js/vendor/fastclick.js', array('jquery'), '', true);
    wp_enqueue_script("foundation_js", get_template_directory_uri() . '/js/foundation.min.js', array('jquery', 'fastclick_js'), '', true);
}

add_action('wp_enqueue_scripts', 'foundation_load_scripts');

/* Suporte a imagens destacadas */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 600, 450, array('center', 'center') );
add_image_size( 'thumbnail-index', 600, 450 );

/* Tamanho dos excertos */
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Suporte a Widgets: Barra Lateral */
register_sidebar( array(
    'name'          => __( 'Widgets: Barra Lateral', 'meublog' ),
    'id'            => 'widgets-barra-lateral',
    'description'   => __( 'Adicione Widgets para exibí-los na Barra Lateral de seu site.', 'meublog' ),
    'before_widget' => '<div class="conteudo-widget small-12 medium-12 large-12 column">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1>',
    'after_title'   => '</h1>',
) );

/* Suporte a Widgets: Rodapé */
register_sidebar( array(
    'name'          => __( 'Widgets: Rodapé', 'meublog' ),
    'id'            => 'widgets-rodape',
    'description'   => __( 'Adicione Widgets para exibí-los no Rodapé de seu site.', 'meublog' ),
    'before_widget' => '<div class="small-12 small-centered medium-4 medium-centered large-4 large-centered left column">',
    'after_widget'  => '</div>',
    'before_title'  => '<h1>',
    'after_title'   => '</h1>',
) );