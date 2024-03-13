<?php

include dirname(__DIR__) . '/database/db-connect.php';
include dirname(__DIR__) . '/functions/potions.fn.php';

?>

<?php

// GESTION D'ERREUR VIA LA VUE (php.ini)
// -------------------------------------
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// -------------------------------------

if (!empty($_POST['image']) && !empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['id'])) {

    // ON DECLARE NOS VARIABLES
    $id = $_POST['id'];

    // htmlspecialchars() IGNORE LES SPECIAUX TANDIS CE QUE CI-DESSOUS ENCODE LES CARACTERES SPECIAUX
    // SI UN CARACTERE SPECIAL EST ENVOYE LE CODE HEX SERA RENVOYE
    $image = htmlentities($_POST['image'], ENT_QUOTES);
    $titre = htmlentities($_POST['titre'], ENT_QUOTES);
    $description = htmlentities($_POST['description'], ENT_QUOTES);

    if (updatePotion($db, $id, $image, $titre, $description)) {

        header('location: ../pages/produits.php');
    } else {

        echo "<h1>Une erreur est survenue</h1>";
    }
} else {
    echo "<h1>Tout les champs sont obligatoires.</h1>";
}
