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
                <button class="hover-button">DEVIS GRATUIT</button>
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
                <p>Lorem Ipsum</p>
            </div>
            <div class="infos-slider">
                <img src="<?php echo get_template_directory_uri() . '/img/img_infos.jpg' ?>" alt="Image section Infos">
            </div>
        </div>
    </div>

    <!-- Section contact de la page d'accueil -->

    <div class="contact-ager">
        <p>Pour toute demande, passez par notre formulaire et nous vous apporterons une réponse dans les plus brefs délais !</p>
        <a href="contact">Contactez-nous</a>
    </div>

</main>

<?php get_footer(); ?>