<?php

include '../database/db-connect.php';

// UN SELECT POUR RECUPERER LES INFOS
$id = $_GET['id'];

$potion = $db->query("SELECT * FROM potions WHERE ID = $id")->fetch();

?>

<main>

    <section style="display: flex; align-items: center; justify-content: around;" id="product-details">

        <div style="width: 50%; padding: 20px;">
            <h1 style="width: 50%; font-size: 90px;"><?= $potion['titre'] ?></h1>
        </div>

        <div style="width: 50%; padding: 20px; display: flex; flex-direction: column; align-items: center;">
            <h1 style="padding: 20px;"><?= $potion['titre'] ?></h1>
            <img style="width: 100px;" src="<?= $potion['image'] ?>" alt="Potion">
            <p style=" width: 50%; padding: 20px;"><?= $potion['description'] ?></p>

            <a class="add" href="produits.php">Retour à la liste des potions</a>
        </div>

    </section>

</main>