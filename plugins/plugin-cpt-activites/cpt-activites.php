<?php
/* 
    Plugin Name: Plugin pour les custom posts 'Activites'
    Plugin URI: http://siteagerwp/
    Description: Ceci est le plugin qui gère les ativites du site Ager
    Author: Jimmy GILBERT
    Version: 1.0
    Author URI: http://siteagerwp/
*/

/* Ajouter un Custom Post pour les domaines d'activités */

function custom_post_activites() {

    /* CPT activites */

    $labels = array(
        'name' => 'activites',
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
        'supports' => array( 'title', 'editor', 'thumbnail' ),
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