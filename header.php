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
        
        <title><?php the_title(); ?> - AGER Systèmes</title>

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

                <nav class="menu">
                    <div id="navbar">
                        <label for="toggle"><i class="fas"></i></label>
                        <input type="checkbox" id="toggle" role="button" />
                        <?php 
                            wp_nav_menu(
                                array(
                                    'container' => 'ul',
                                    'theme_location' => 'Primary',
                                    'menu_class' => 'primary-nav',
                                )
                            );
                        ?>

                    </div>

                    <!-- Liens annexes au menu de navigation -->

                    <div class="links">

                        <?php
                            if (!is_page('recherche') ) :
                        ?>

                            <!-- Barre de recherche bureau -->

                            <div class="nav-search-desktop search-desktop">
                                <button type="submit" id="search-btn-desktop" title="Rechercher" class="fas"></button>
                                <form action="/recherche" method="post" class="search-form">
                                    <input type="text" id="search-bar-desktop" class="search" name="Recherche" placeholder="Recherche..." required="true">
                                </form>
                            </div>

                        <?php endif; ?>
                        
                        <div class="sidebar-header">
                            <?php dynamic_sidebar('header-sidebar'); ?>
                        </div>

                        <?php
                            if (!is_page('recherche') ) :
                        ?>

                            <!-- Barre de recherche mobile -->
                        
                            <div class="nav-search-mobile search-mobile">
                                <button type="submit" id="search-btn-mobile" title="Rechercher" class="fas"></button>
                                <form action="/recherche" method="post" class="search-form">
                                    <input type="text" id="search-bar-mobile" class="search" name="Recherche" placeholder="Recherche..." required="true">
                                </form>
                            </div>

                        <?php endif; ?>
                    </div>
                </nav>
            </div>
        </header>