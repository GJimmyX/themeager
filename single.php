<?php 
    /* Appel du header */
    get_header();
?>

<?php if ( have_posts() ) : the_post(); ?>

<!-- Contenu de la page Single Acutalite -->

    <div class="single-actualite">

        <!-- Lien de retour sur la page d'accueil -->

        <div class="single-link">
            <a href="/actualites">Retour</a>
        </div>
        
        <!-- Import du titre -->

        <div class="single-intro">
            <h3><?php the_title(); ?></h3>
        </div>

        <!-- Import de la description -->

        <div class="single-content">
            <p class="single-date">
                <?php the_field('date'); ?>
            </p>
            <p class="single-paragraph">
                <?php the_field('description'); ?>
            </p>
        </div>
    </div>

<?php endif; ?>

<?php 
    /* Appel du footer */
    get_footer();
?>