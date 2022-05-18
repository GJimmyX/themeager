<?php 
    /* Template du header */
    get_header();
?>

<?php if ( have_posts() ) : the_post(); ?>

    <div class="single-activite">
        <h2><?php the_title(); ?></h2>
        <a href="<?php bloginfo('url') ?>">Retour</a>
    </div>

<?php endif; ?>

<?php
    /* Template du footer */
    get_footer();
?>