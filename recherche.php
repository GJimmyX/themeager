<?php
    /* Template name: Recherche */
?>

<?php
    /* Appel du header */
    get_header();
?>

<?php

    /* Connexion à la base de données */

    $servname = 'localhost';
    $dbname = 'ager_db';
    $username = 'root';
    $password = '';

    try
    {
        // Connexion via MySQL
        $mysqlQuery = new PDO(
            "mysql:host=$servname;dbname=$dbname",
            $username,
            $password
        );
    }
    catch(Exception $e)
    {
        // Si erreur de connexion, affichage du message d'erreur avec interruption du service
            die('Erreur : '.$e->getMessage());
    }

    $search = $_POST['Recherche'];

    /* echo $search; */

    $sqlQuery = "SELECT * FROM wp_posts WHERE post_name LIKE ('%$search%')";

    $data = $mysqlQuery->prepare($sqlQuery);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);

    /* var_dump($result); */

?>

<!-- Section des résultats de recherche -->

<main class="recherche">
    <div class="resultats-recherche">
        <?php
        
            // Si on a au moins 1 résultat

            if ($result){
                ?><h1>Résultats pour "<?php echo $search; ?>":</h1><?php
                foreach ($result as $res) {
                    $entete = '';
                    ?>
                    <div class="resultat">
                        <p><?php echo $entete ?></p>
                        <a href="<?php print_r($res['guid']); ?>" title="<?php print_r($res['post_title']); ?>" id="<?php print_r($res['post_name']) ?>"><?php print_r($res['post_title']); ?></a>
                    </div>
                    <?php
                }
            }

            // Si on a aucun résultat

            else{ ?>
                <h1>Aucun Résultat pour "<?php echo $search; ?>":</h1>
                <div class="resultatequalzero">
                    <?php _e('Votre recherche n\'a pas donnée de résultats. Veuillez changez de mot-clé(s) et réessayez.'); ?>
                </div>
                <?php
            }

        ?>
    </div>
</main>

<?php
    /* Appel du footer */
    get_footer();
?>