<?php

/* Ajouter l'édition dans WordPress */

add_theme_support('customize-selective-refresh-widgets');

/* Ajouter le support de customisation du logo */

add_theme_support( 'custom-logo' );

/* Ajouter le support du background */

add_theme_support( 'custom-background' );

/* Ajouter le support des posts-thumbnails */

add_theme_support( 'post-thumbnails' );

/* Supprimer différentes tailles d'image */

function remove_default_img_sizes( $sizes ) {
  $targets = ['medium_large', 'large', '1536x1536', '2048x2048'];

  foreach($sizes as $size_index=>$size) {
    if(in_array($size, $targets)) {
      unset($sizes[$size_index]);
    }
  }

  return $sizes;
}
  
add_filter( 'intermediate_image_sizes', 'remove_default_img_sizes' );

/* Ajouter différentes tailles d'image */

function taille_media() {
    add_image_size( 'taille_01', 250, 200, false );
    add_image_size( 'taille_02', 500, 400, false );
    add_image_size( 'taille_03', 750, 600, false );
};
  
add_action('after_setup_theme', 'taille_media');

/* Afficher la gestion de menus */

register_nav_menu( 'Primary', __( 'Menu de Navigation' ));

/* Ajouter le support du CSS, de la font d'écriture, de Font Awesome, des dashicons */

function enqueue_style() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'searchbarjs', get_template_directory_uri() . '/js/search-bar.js', false, '', true);
    if (is_page('accueil')) :
      wp_enqueue_script( 'sliderjs', get_template_directory_uri() . '/js/slider.js', false, '', true);
      wp_enqueue_script( 'topbtnjs', get_template_directory_uri() . '/js/topBtn.js', false, '', true);
    endif;
}

add_action( 'wp_enqueue_scripts', 'enqueue_style' );

/* Suppression du style in-wordpress */

function remove_duotone() {
    remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
  
add_action( 'init', 'remove_duotone' );

/* Ajout de classes dans le wp_nav_menu() */

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->ajout_class_li)) {
        $classes[] = $args->ajout_class_li;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


/* Customs posts pour le site AGER */


/* Ajouter un Custom Post pour les domaines d'activités */

function custom_post_activites() {

    /* CPT activites */

    $labels = array(
        'name' => 'Activites',
        'all_items' => 'Toutes les activités',
        'singular_name' => 'Activité',
        'add_new_item' => 'Ajouter',
        'edit_item' => 'Modifier',
        'menu_name' => 'Activités',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'menu_position' => 10,
        'menu_icon' => 'dashicons-visibility',
    );

    register_post_type( 'activites', $args );

    $labels = array(
        'name' => 'Activité',
        'new_product_name' => 'Nouvelle Activité',
        'parent_item' => 'Type Activité',
    );
    
    $args = array(
      'labels' =>$labels,
      'public' => true,
      'show_in_rest' => true,
      'hierarchical' => true,
    );
    
    register_taxonomy( 'nav-accueil', 'activites', $args );
}

add_action( 'init', 'custom_post_activites', false );

?>