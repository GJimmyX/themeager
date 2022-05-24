<?php
    /* Template Name: Contact */
?>

<?php
    /* Appel du header */
    get_header();
?>

<!-- Contenu de la page Contact -->

<main class="contact">

    <!-- Bannière de la page -->

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

    <!-- Section Adresse et Formulaire -->

    <div class="adresse-formulaire">

        <!-- Adresse AGER Systèmes -->

        <div class="adresse-agence">
            <h2>AGER SYSTEMES</h2>
            <a href="https://www.google.com/maps/place/AG+E.r+Syst%C3%A8mes/@46.7862248,-1.1807676,19z/data=!4m5!3m4!1s0x0:0x1ff71baff424c061!8m2!3d46.7865806!4d-1.1809925" target="_blank" class="adresse">
                <p>Parc d'Activités de la Mongie - 8 rue de l'Arée, 85140 Essarts En Bocage</p>
                <img src="<?php echo get_template_directory_uri() . '/img/AGER.png' ?>" alt="Carte de l'agence">
            </a>
            <p class="adresse-contact">
                <span>Tél : 02 51 07 07 92</span>
                <span>Fax : 02 51 07 23 07</span>
                <span>Email : <a href="mailto:contact@agersystemes.fr" target="_blank" class="email-contact">contact@agersystemes.fr</a></span>
            </p>
        </div>

        <!-- Formulaire de contact -->

        <div class="formulaire">
            <?php echo do_shortcode('[contact-form-7 id="93" title="Contactez-nous !" html_name="formulaire"]'); ?>
        </div>
    </div>
</main>

<?php
    /* Appel du footer */
    get_footer();
?>