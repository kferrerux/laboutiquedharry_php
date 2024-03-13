<?php

include 'database/db-connect.php';
include 'functions/potions.fn.php';

session_start();

?>

<?php

// RECUPERATION DES POTIONS
$potions = $db->query('SELECT * FROM potions');
$potions = $potions->fetchAll(PDO::FETCH_ASSOC);

?>

<?php

// AFFICHAGE DES POTIONS DANS UNE BOUCLE FOREACH
foreach ($potions as $potion) :

    $id = $potion['id'];

?>

    <div class="potion">
        <img src="<?= $potion['image'] ?>" alt="Potion">
        <h4><?= $potion['titre'] ?></h4>
        <p><?= $potion['description'] ?>
        </p>
        <a href="product-page.php?id=<?= $id ?>" style="margin: 10px;" class="p-btn">+ d'infos</a>

        <?php

        // VERIFICATION SI L'UTILISATEUR EST ADMIN
        // AFFICHAGE DE BOUTONS DE MODIFICATION ET DE SUPPRESSION (CRUD)
        if (isset($_SESSION['admin'])) {

            echo "
                <div style='display: flex; justify-content: space-between; align-items: center;'>
                    <a style='margin: 5px; border-radius: 20px; padding: 5px; background-color: blue; color: white'href='../views/update-potion.php?id=$id'>Modifier</a>
                    <a onclick='deleteConfirm(event)' style='border-radius: 20px; padding: 5px; background-color: red;color: white' data-id='$id' href=''>Supprimer</a>
                </div>
                </div>";
        } else {
            echo '</div>';
        }

        ?>

    <?php

endforeach

    ?>