<?php

include dirname(__DIR__) . '/database/db-connect.php';
include __DIR__ . '/header.php';

// ON IMPORTE LE FICHIER CONTENANT LES FONCTIONS
include dirname(__DIR__) . '/functions/potions.fn.php';

session_start();

?>

<!-- FORMULAIRE DE MISE A JOUR DE POTION -->

<main>

    <section id="add-potion">

        <?php

        // ON APPEL LA FONCTION
        $potion = getPotionbyId($db, $_GET['id']);

        echo '<h3 style="font-weight: lighter; text-align: center;">Vous modifiez la potion</h3>';
        echo '<h3 style="font-weight: lighter; text-align: center;">' . $potion['titre'] . '</h3>';
        echo '<img style="width: 5%; margin-bottom: 10px; margin-top: 10px;" src=" ' . $potion['image'] . ' " alt="image">';
        echo '<hr style="width: 100%;">';

        ?>

        <h1 style="text-align: center;">Formulaire de modification de potion</h1>
        <form id="add-potion" action="../controllers/update-potions.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

            <label for="potion">URL de l'image</label><br>
            <input type="text" name="image" value="<?= $potion['image'] ?>" id="image" required style="width: 100%; border-radius: 10px;"><br>

            <label for="titre">Titre de la potion</label><br>
            <input type="text" name="titre" value="<?= $potion['titre'] ?>" id="titre" required style="width: 100%; border-radius: 10px;"><br>

            <label for="description">Description</label><br>
            <input type="text" name="description" value="<?= $potion['description'] ?>" id="description" required style="width: 100%; border-radius: 10px;"><br>

            <div style="width: 100%; display: flex; justify-content: center;">
                <input style="margin-bottom: 10px; text-align: center;" class="add" type="submit" value="Modifier" id="">
                <a class="cancel" style="margin-bottom: 10px;" href="../pages/produits.php">Retour</a>
            </div>

        </form>

    </section>

</main>

<?php

include './footer.php';

?>

<!-- 
    
LIENS POUR DES POTIONS A TITRE DE TEST
______________________________

https://i.ibb.co/KFnzdpY/01.png
https://i.ibb.co/2SyN625/02.png
https://i.ibb.co/4f3BTxx/03.png
https://i.ibb.co/WKyrjNk/04.png
https://i.ibb.co/jVcb6yk/05.png
https://i.ibb.co/tM2p2jZ/06.png
https://i.ibb.co/vdjw56K/07.png
https://i.ibb.co/gjSkYdf/08.png
https://i.ibb.co/mRk900m/09.png
https://i.ibb.co/61kqrct/10.png
https://i.ibb.co/FW9nXFn/11.png
https://i.ibb.co/ctdvHcn/12.png
https://i.ibb.co/8MXw96F/13.png
https://i.ibb.co/PWs2N2K/14.png
https://i.ibb.co/qJj2JW9/15.png
https://i.ibb.co/TkwPQVR/16.png 

-->