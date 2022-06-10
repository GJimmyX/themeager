<?php
    /* Template Name: Entreprises */
?>

<?php
    /* Appel du header */
    get_header();
?>

<!-- Contenu de la page Entreprises -->

<main class="entreprises">

    <!-- Bannière de la page -->

    <div class="section_titre">
        <div class="img-hover-entreprises">
            <div class="texte-hover">
                <h2>Entreprises</h2>
            </div>
        </div>
    </div>

    <!-- Présentation de une ou plusieurs réalisation(s) -->

    <div class="section_description">

        <!-- Réalisation 1 -->

        <div class="part01">
            <p class="texte_description">
                Nous vous proposons de découvrir en sous-rubriques quelques photos d'installations de panneaux photovoltaïques que nous avons réalisés pour des entreprises sur :<br />
                <br/>- Bâtiments neufs
                <br/>- Rénovation
                <br/>- Garages
            </p>
            <img src="<?php echo get_template_directory_uri() . '/img/modal07.jpg' ?>" alt="Modal section Agriculture" class="modal-grande" onclick="document.getElementById('modal01').style.display='block'">
            <div id="modal01" class="modal" onclick="this.style.display='none'">
                <span class="fas modal-button"></span>
                <div class="modal-content">                        
                    <img src="<?php echo get_template_directory_uri() . '/img/modal07.jpg' ?>" alt="Modal section Agriculture">
                    <h3>Exemple d'Implantation</h3>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    /* Appel du footer */
    get_footer();
?>