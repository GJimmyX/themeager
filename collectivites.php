<?php
    /* Template Name: Collectivités locales */
?>

<?php
    /* Appel du header */
    get_header();
?>

<!-- Contenu de la page Collectivités Locales -->

<main class="collectivites">

    <!-- Bannière de la page -->

    <div class="section_titre">
        <div class="img-hover-collectivites">
            <div class="texte-hover">
                <h2>Collectivités Locales</h2>
            </div>
        </div>
    </div>

    <!-- Présentation de une ou plusieurs réalisation(s) -->

    <div class="section_description">

        <!-- Réalisation 1 -->

        <div class="part01">
            <p class="texte_description">
                Ci-contre, quelques photos de nos réalisations de chantiers concernant des bâtiments monopente.
            </p>
            <img src="<?php echo get_template_directory_uri() . '/img/modal04et06.jpg' ?>" alt="Modal section Agriculture" class="modal-grande" onclick="document.getElementById('modal01').style.display='block'">
            <div id="modal01" class="modal" onclick="this.style.display='none'">
                <span class="fas modal-button"></span>
                <div class="modal-content">                        
                    <img src="<?php echo get_template_directory_uri() . '/img/modal04et06.jpg' ?>" alt="Modal section Agriculture">
                    <h3>Exemple d'Implantation</h3>
                </div>
            </div>
        </div>

        <!-- Réalisations 2 et 3 -->

        <div class="part02">
            <img src="<?php echo get_template_directory_uri() . '/img/modal05.jpg' ?>" alt="Modal section Agriculture" class="modal-petite" onclick="document.getElementById('modal02').style.display='block'">
            <div id="modal02" class="modal" onclick="this.style.display='none'">
                <span class="fas modal-button"></span>
                <div class="modal-content">                        
                    <img src="<?php echo get_template_directory_uri() . '/img/modal05.jpg' ?>" alt="Modal section Agriculture">
                    <h3>Exemple d'Implantation</h3>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/img/modal04et06.jpg' ?>" alt="Modal section Agriculture" class="modal-petite" onclick="document.getElementById('modal03').style.display='block'">
            <div id="modal03" class="modal" onclick="this.style.display='none'">
                <span class="fas modal-button"></span>
                <div class="modal-content">                        
                    <img src="<?php echo get_template_directory_uri() . '/img/modal04et06.jpg' ?>" alt="Modal section Agriculture">
                    <h3>Exemple d'Implantation</h3>
                </div>
            </div>
            <p class="texte_description">
                Nous vous proposons de découvrir en sous-rubriques quelques photos de nos réalisations sur :<br />
                <br/>- Bâtiments de stockage de produits agricoles,
                <br/>- Bâtiment monopente sur fosse à lisier,
                <br/>- ...
            </p>
        </div>
    </div>
</main>

<?php
    /* Appel du footer */
    get_footer();
?>