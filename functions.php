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

