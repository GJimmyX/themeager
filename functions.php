<?php

/* Ajouter l'édition dans WordPress */

add_theme_support('customize-selective-refresh-widgets');

/* Afficher la gestion de menus */

register_nav_menu( 'Primary', __( 'Menu de Navigation' ));

/* Ajouter le support du background */

add_theme_support( 'custom-background' );

/* Ajouter le support de customisation du logo */

add_theme_support( 'custom-logo' );

/* Ajouter différentes tailles d'image */

function taille_media() {
    add_image_size( 'taille_01', 250, 200, false );
    add_image_size( 'taille_02', 500, 400, false );
    add_image_size( 'taille_03', 750, 600, false );
};
  
add_action('after_setup_theme', 'taille_media');

/* Ajouter le support des posts-thumbnails */

add_theme_support( 'post-thumbnails' );

/* Ajouter le support du CSS, de la font d'écriture, de Font Awesome, des dashicons */

function enqueue_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_style' );

/* Suppression du style in-wordpress */

function remove_duotone() {
    remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
  
add_action( 'init', 'remove_duotone' );

/* Ajour de classes dans le wp_nav_menu() */

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->ajout_class_li)) {
        $classes[] = $args->ajout_class_li;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

?>