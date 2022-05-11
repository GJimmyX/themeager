<?php get_header(); ?>

<!-- Contenu de la page d'accueil -->

<main class="accueil">
    <!-- Image en dessous du header -->

    <div class="accueil-img">
        <img src="<?php echo get_template_directory_uri() . '/img/background_image.jpg'; ?>" alt="Image en background">
        
        <!-- Hover sur l'image -->
        
        <div class="hover">
            <div class="hover-content">
                <h2 class="hover-title">Intégrateur de solutions photovoltaïques</h2>
                <div class="hover-line"></div>
                <p class="hover-text">Notre professionnalisme, pour votre tranquilité</p>
                <a href="/contact" class="hover-button">DEVIS GRATUIT</a>
            </div>
        </div>
    </div>

    <!-- Présentation des domaines d'activités de l'entreprise -->

    <div class="activites-ager">
        <div class="activites-title">
            <h3>Installation d'équipement photovoltaïque</h3>
            <div class="activites-line"></div>
        </div>
        <div class="activites-content">
            <?php 
                $boucle = new WP_Query();
                $boucle->query( array(
                    'post_type' => 'activites',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    )
                );
            ?>
            <?php while ( $boucle->have_posts() ) : $boucle->the_post(); ?>
                
                <div class="activites">
                    <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink(); ?>" class="activites-lien"><?php the_title(); ?></a>
                </div>

            <?php endwhile; ?>
        </div>
    </div>

    <!-- Section plus d'infos de la page d'accueil -->

    <div class="plus-d-infos-ager">
        <div class="plus-d-infos-title">
            <h3>Plus d'infos</h3>
            <div class="plus-d-infos-line"></div>
        </div>
        <div class="plus-d-infos-content">
            <div class="infos-avantages">
                <div class="infos-title">
                    <div class="title-infos-avantages">
                        <h2>Intégrateur de solutions photovoltaïques</h2>
                    </div>
                    <div class="infos-avantages-line"></div>
                    <p>Ses avantages</p>
                </div>
                <div class="avantages">
                    <div id="avantage01">
                        <div class="avantages-form">
                            <i class="fas fa-sun"></i>
                        </div>
                        <p>ENERGIE SOLAIRE</p>
                    </div>
                    <div id="avantage02">
                        <div class="avantages-form">
                            <i class="fas fa-solar-panel"></i>
                        </div>
                        <p>RENDEMENT</p>
                    </div>
                    <div id="avantage03">
                        <div class="avantages-form">
                            <i class="fas fa-cloud-rain"></i>
                        </div>
                        <p>FIABILITE</p>
                    </div>
                </div>
            </div>
            <div class="infos-slider">
                <div id="slider">
                    <div class="slider-elements">
                        <img src="<?php echo get_template_directory_uri() . '/img/img_infos.jpg' ?>" alt="Image section Infos">
                    </div>
                    <div class="slider-elements">
                        <img src="<?php echo get_template_directory_uri() . '/img/background_image.jpg' ?>" alt="Image section Infos">
                    </div>
                    <div class="slider-elements">
                        <img src="<?php echo get_template_directory_uri() . '/img/modal01.jpg' ?>" alt="Image section Infos">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section contact de la page d'accueil -->

    <div class="section-articles-contact">
        <div class="articles-ager">
            <p>(Titre de l'Article)</p>
            <a href="#" class="articles">Plus d'articles...</a>
        </div>
        <div class="contact-ager">
            <p>Pour toute demande, passez par notre formulaire et nous vous apporterons une réponse dans les plus brefs délais !</p>
            <a href="/contact" class="contact">Contactez-nous</a>
        </div>
    </div>

    <!-- Bouton de remontée au haut de la page d'accueil -->

    <div id="btn">
        <button onclick="topFunction()" id="topBtn" title="Remonter en haut"><i class="fas fa-chevron-up"></i></button>
    </div>

</main>

<?php get_footer(); ?>