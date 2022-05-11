<!DOCTYPE html>
<html lang="fr">

    <!-- Template du header -->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title> <?php the_title(); ?> - AGER Systèmes</title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <!-- Mise en place du menu de navigation -->

        <header>
            <div class="nav-container">
                <h1><?php the_custom_logo(); ?></h1>
                <nav class="menu">
                    <?php 
                        wp_nav_menu( 
                            array(
                                'container' => 'ul',
                                'menu_class' => 'primary-nav',
                                'ajout_class_li' => 'item',
                            )
                        );
                    ?>
                </nav>
                <div class="nav-search-desktop">
                    <div class="search-desktop">
                        <button id="search-btn-desktop" class="fas"></button>
                        <form action="/recherche.php" method="post" class="search-form">
                            <input type="text" id="search-bar-desktop" class="search" placeholder="Recherche...">
                        </form>
                    </div>
                </div>
                <a href="tel:+0251070792" class="phone"><i class="fas fa-phone"></i>02-51-07-07-92</a>
                <a href="https://fr-fr.facebook.com/" target="_blank" class="fab rs"></a>
                <div class="nav-search-mobile">
                    <div class="search-mobile">
                        <button id="search-btn-mobile" class="fas"></button>
                        <form action="/recherche.php" method="post" class="search-form">
                            <input type="text" id="search-bar-mobile" class="search" placeholder="Recherche...">
                        </form>
                    </div>
                </div>
            </div>
        </header>