<?php
    /* Template Name: Contact */
?>

<?php get_header(); ?>

<main class="contact">
    <div class="section_titre">
        <div class="img-hover-contact">
            <div class="texte-hover">
                <h2>Contact</h2>
                <p>
                    Pour toute demande, passez par notre formulaire et nous vous apporterons une réponse dans les plus brefs délais !
                </p>
            </div>
        </div>
    </div>
    <div class="formulaire">
        <?php echo do_shortcode('[contact-form-7 id="93" title="Contactez-nous !" html_name="formulaire"]'); ?>
    </div>
</main>

<?php get_footer(); ?>