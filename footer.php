        <!-- Template du footer -->

        <footer>

            <!-- Éléments du pied de page -->

            <div class="pied_de_page">
                <div class="align-pdp">
                    <p><i class="far fa-copyright"></i> Copyright : AGER Systèmes</p>
                    <p><a href="https://www.google.com/maps/place/AG+E.r+Syst%C3%A8mes/@46.7862248,-1.1807676,19z/data=!4m5!3m4!1s0x0:0x1ff71baff424c061!8m2!3d46.7865806!4d-1.1809925" target="_blank">Parc d'Activités de la Mongie, 85140 Essarts En Bocage</a></p>
                    <p><a href="<?php echo get_template_directory_uri() . '/mentions-legales.pdf' ?>">Mentions légales</a></p>
                </div>
            </div>

            <!-- Plan du site -->

            <p class="siteMap">
                <a href="/wp-content/themes/themeager/plan-du-site.xml" class="siteMapLink">Plan du site</a>
            </p>

            <!-- Appel du pied de la page -->

            <?php wp_footer(); ?>
        </footer>
    </body>
</html>