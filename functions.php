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

/* Afficher la gestion de menus */

register_nav_menu( 'Primary', __( 'Menu de Navigation' ));

/* Différer éxécution scripts JS */

function add_defer_attribute($tag, $handle) {
  $scripts_to_defer = array(
    get_template_directory_uri() . '/js/navigation.js',
    get_template_directory_uri() . '/js/search-bar.js',
    get_template_directory_uri() . '/js/slider.js',
    get_template_directory_uri() . '/js/topBtn.js',
  );
  foreach ($scripts_to_defer as $defer_scripts) {
    if ( $defer_scripts === $handle ) {
      return str_replace( ' src', ' defer="defer" src', $tag );
    }
  }
  return $tag;
}

add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

/* Ajouter le support du CSS, des polices d'écriture, de Font Awesome et du JS/JQuery */

function enqueue_style_themeager() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('navjs', get_template_directory_uri() . '/js/navigation.js', false, '', true);
    wp_enqueue_script( get_template_directory_uri() . '/js/navigation.js');
    if (!is_page('recherche') ) :
      wp_enqueue_script('searchbarjs', get_template_directory_uri() . '/js/search-bar.js', false, '', true);
      wp_enqueue_script( get_template_directory_uri() . '/js/search-bar.js');
    endif;
    if (is_page('accueil')) :
      wp_enqueue_script('sliderjs', get_template_directory_uri() . '/js/slider.js', false, '', true);
      wp_enqueue_script('topbtnjs', get_template_directory_uri() . '/js/topBtn.js', false, '', true);
      wp_enqueue_script( get_template_directory_uri() . '/js/slider.js');
      wp_enqueue_script( get_template_directory_uri() . '/js/topBtn.js');
    endif;
};

add_action( 'wp_enqueue_scripts', 'enqueue_style_themeager' );

/* Enlever l'affichage de la barre d'administration pour tout le monde sauf l'admin */

if (!current_user_can('administrator') ) :
  show_admin_bar(false);
endif;

/* Enlever l'affichage des pages pour le rôle Éditeur dans la barre d'administration*/

function visu_menu() {
  if (current_user_can('editor') ) :
    remove_menu_page('edit.php?post_type=page');
  endif;
}

add_action( 'admin_menu', 'visu_menu', 999);

/* Enlever l'affichage du plugin SEO, de la création de pages et de Contact Form 7 pour le rôle Éditeur dans la barre d'administration */

function visu_abmenu() {
  if (current_user_can('editor') ) :
    ?>

    <style>

      /* Enlever l'affichage du plugin SEO et du plugin Contact Form 7 pour le rôle Éditeur dans la barre d'administration*/

      body #wpwrap #adminmenumain #adminmenuwrap #adminmenu #toplevel_page_wpseo_workouts{
        display: none;
      }
      body #wpwrap #adminmenumain #adminmenuwrap #adminmenu #toplevel_page_wpcf7{
        display: none;
      }

      /* Enlever l'affichage du plugin SEO et du plugin Contact Form 7 pour le rôle Éditeur dans l'entête de la barre d'administration*/

      body #wpwrap #wpcontent #wpadminbar .ab-top-menu #wp-admin-bar-new-content .ab-sub-wrapper #wp-admin-bar-new-page{
        display: none;
      }
      body #wpwrap #wpcontent #wpadminbar .ab-top-menu #wp-admin-bar-wpseo-menu{
        display: none;
      }

      /* Enlever l'affichage de blocs dans le body de l'administration */

      body #wpwrap #wpcontent #wpbody #wpbody-content #screen-meta #screen-options-wrap #adv-settings .metabox-prefs label{
        display: none;
      }
      body #wpwrap #wpcontent #wpbody #wpbody-content .wrap #dashboard-widgets-wrap .metabox-holder #postbox-container-1 .ui-sortable #dashboard_right_now{
        display: none;
      }
      body #wpwrap #wpcontent #wpbody #wpbody-content .wrap #dashboard-widgets-wrap .metabox-holder #postbox-container-1 .ui-sortable .wpseo-dashboard-overview{
        display: none;
      }
      
    </style>

    <?php
  endif;
}

add_action( 'admin_bar_menu', 'visu_abmenu', 999);

/* Suppression du style in-wordpress */

function remove_duotone() {
  remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
  
add_action( 'init', 'remove_duotone' );

/* Ajouter la personnalisation du login form */

function my_login_style() { ?>
  <style>
    body #login{
      width: 375px;
    }
    #login h1 a{
      background-image: url(<?php echo get_template_directory_uri(); ?>/img/logo_agersystemes.png);
      height: 179px;
      width: 375px;
      background-size: 375px 179px;
      background-repeat: no-repeat;
    }
    #login form p #user_login:focus, #login form .user-pass-wrap .wp-pwd #user_pass:focus, #login form p #rememberme:focus, #login form .user-pass-wrap .wp-pwd button span:focus{
      border: 1px solid #C13030;
      border-color: none;
      box-shadow: none;
    }
    #login form .user-pass-wrap .wp-pwd button span{
      color: #C13030;
    }
    #login form .user-pass-wrap .wp-pwd button.wp-hide-pw:focus{
      border-color: #C13030;
      box-shadow: none;
    }
    #login form .forgetmenot input:focus{
      outline: none;
    }
    #login form .forgetmenot input:checked::before{
      content: url(<?php echo get_template_directory_uri(); ?>/img/check.png);
      margin: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #login form .submit #wp-submit{
      background-color: #C13030;
      border: 1px solid #C13030;
    }
    #login #nav{
      text-align: center;
    }
    #login #backtoblog{
      text-align: center;
    }
    #login #nav a:hover, #login #backtoblog a:hover{
      color: #C13030;
    }
    #login #nav a:focus, #login #backtoblog a:focus{
      transition-property: none;
    }
    .language-switcher{
      display: none;
    }
    body #login #login_error{
      border-left-color: #C13030;
    }
  </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_style' );

/* Modification URL de redirection sur l'image */

function my_login_logo_url() {
  return home_url();
}

add_filter( 'login_headerurl', 'my_login_logo_url' );

/* Personnalisation message d'erreur d'identification à la connexion */

function my_login_error() {
  return 'Informations de connexion incorrectes !';
}

add_filter( 'login_errors', 'my_login_error' );

/* Précochage par défaut de la case 'Se souvenir de moi' */

function my_login_remember_coche() {
  echo "<script>document.getElementById('rememberme').checked = true;</script>";
}

function my_login_remember() {
  add_filter( 'login_footer', 'my_login_remember_coche' );
}

add_action( 'init', 'my_login_remember' );

/* Modifier expiration cookie */

function wpm_cookie( $expirein ) {
  return 15552000; // cette valeur correspond à 6 mois en secondes
}

/* Ajouter le support Widget pour le header */

register_sidebar( array(
  'id' => 'header-sidebar',
  'name' => 'Header',
  'before_widget' => '',
  'after_widget' => '',
) );


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