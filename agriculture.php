<?php
    /* Template Name: Agriculture */
?>

<?php
    /* Appel du header */
    get_header();
?>

<!-- Contenu de la page Agriculture -->

<main class="agriculture">

    <!-- Bannière de la page -->

    <div class="section_titre">
        <div class="img-hover-agriculture">
            <div class="texte-hover">
                <h2>Agriculture</h2>
            </div>
        </div>
    </div>

    <!-- Présentation de une ou plusieurs réalisation(s) -->

    <div class="section_description">

        <!-- Réalisation 1 -->

        <div class="part01">
            <p class="texte_description">
                Nous réalisons les différentes démarches administratives jusqu'à l'installation de panneaux photovoltaïques clés en main. Nous pouvons également prendre en charge les démarches pour la construction de bâtiments agricoles.
            </p>
            <img src="<?php echo get_template_directory_uri() . '/img/modal01.jpg' ?>" alt="Modal section Agriculture" class="modal-grande" onclick="document.getElementById('modal01').style.display='block'">
            <div id="modal01" class="modal" onclick="this.style.display='none'">
                <span class="fas modal-button"></span>
                <div class="modal-content">                        
                    <img src="<?php echo get_template_directory_uri() . '/img/modal01.jpg' ?>" alt="Modal section Agriculture">
                    <h3>Exemple d'Implantation</h3>
                </div>
            </div>
        </div>

        <!-- Réalisations 2 et 3 -->

        <div class="part02">
            <img src="<?php echo get_template_directory_uri() . '/img/modal02.jpg' ?>" alt="Modal section Agriculture" class="modal-petite" onclick="document.getElementById('modal02').style.display='block'">
            <div id="modal02" class="modal" onclick="this.style.display='none'">
                <span class="fas modal-button"></span>
                <div class="modal-content">                        
                    <img src="<?php echo get_template_directory_uri() . '/img/modal02.jpg' ?>" alt="Modal section Agriculture">
                    <h3>Exemple d'Implantation</h3>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/img/modal03.jpg' ?>" alt="Modal section Agriculture" class="modal-petite" onclick="document.getElementById('modal03').style.display='block'">
            <div id="modal03" class="modal" onclick="this.style.display='none'">
                <span class="fas modal-button"></span>
                <div class="modal-content">                        
                    <img src="<?php echo get_template_directory_uri() . '/img/modal03.jpg' ?>" alt="Modal section Agriculture">
                    <h3>Exemple d'Implantation</h3>
                </div>
            </div>
            <p class="texte_description">
                Nous vous proposons de découvrir en sous-rubriques quelques photos de chantiers que nous avons réalisé en agriculture et élevage :<br />
                <br/>- Bâtiments d'élevage
                <br/>- Pondeuses
                <br/>- ...
            </p>
        </div>
    </div>
</main>

<?php
    /* Appel du footer */
    get_footer();
?>