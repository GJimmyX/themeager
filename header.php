<?php

    /* Système de cookie du site AGER Systèmes */

    include_once "cookie.php";

?>

<!DOCTYPE html>
<html lang="fr">

    <!-- Appel de la balise <head>, du content et du responsive -->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        
        <!-- Requête cible pour les articles -->

        <?php
            if (is_singular('post') ) : ?>
                <meta name="keywords" content="<?php the_title(); ?>">
            <?php
            endif;
        ?>

        <!-- Titre de chaque page -->

        <?php
            if (is_singular('post') ): ?>
            <title>Actualité - AGER Systèmes</title>
        <?php else : ?>
            <title><?php the_title(); ?> - AGER Systèmes</title>
        <?php endif; ?>

        <?php wp_head(); ?>
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri() . "/js/cookie.js" ?>"></script>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <!-- Structure du <header> -->

        <header>
            <div class="nav-container">

                <!-- Logo de l'entreprise -->

                <h1><?php the_custom_logo(); ?></h1>

                <!-- Menu de navigation du site -->

                <nav id="site-navigation" class="navbar toggled-off" role="navigation">
                    <button class="menu-toggle"><i class="fas"></i></button>
                    <?php
                        wp_nav_menu(
                            array(
                                'container' => 'ul',
                                'theme_location' => 'Primary',
                                'menu_class' => 'nav-menu',
                            )
                        );
                    ?>

                    <!-- Liens annexes au menu de navigation -->

                    <div class="links">

                        <?php
                            if (!is_page('recherche') ) :
                        ?>

                            <!-- Barre de recherche bureau -->

                            <div class="nav-search-desktop search-desktop">
                                <button type="submit" id="search-btn-desktop" title="Rechercher" class="fas"></button>
                                <form action="/recherche" method="post" class="search-form-desktop">
                                    <label for="search-bar-desktop"></label>
                                    <input type="text" id="search-bar-desktop" class="search-desktop" name="Recherche" placeholder="Recherche..." required="true">
                                </form>
                            </div>

                        <?php endif; ?>
                        
                        <!-- Téléphone et réseaux sociaux du site AGER Systèmes -->

                        <?php dynamic_sidebar('header-sidebar'); ?>

                        <?php
                            if (!is_page('recherche') ) :
                        ?>

                            <!-- Barre de recherche mobile -->
                        
                            <div class="nav-search-mobile search-mobile">
                                <button type="submit" id="search-btn-mobile" title="Rechercher" class="fas"></button>
                                <form action="/recherche" method="post" class="search-form-mobile">
                                    <label for="search-bar-mobile"></label>
                                    <input type="text" id="search-bar-mobile" class="search-mobile" name="Recherche" placeholder="Recherche..." required="true">
                                </form>
                            </div>

                        <?php endif; ?>
                    </div>
                </nav>
            </div>
        </header>