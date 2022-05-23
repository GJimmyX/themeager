<?php 
    /* Template du header */
    get_header();
?>

<?php if ( have_posts() ) : the_post(); ?>

<!-- Contenu de la page Single Activité -->

    <div class="single-activite">

        <!-- Lien de retour sur la page d'accueil -->

        <div class="single-link">
            <a href="<?php bloginfo('url') ?>">Retour</a>
        </div>
        
        <!-- Import du titre -->

        <div class="single-intro">
            <h3>Domaine d'activité : <?php the_field('titre'); ?></h3>
        </div>

        <!-- Import de la description -->

        <div class="single-content">
            <?php the_field('description') ?>
        </div>
    </div>

<?php endif; ?>

<?php
    /* Template du footer */
    get_footer();
?>