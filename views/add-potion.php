<?php

include '../database/db-connect.php';
include 'header.php';

?>

<!-- FORMULAIRE AJOUT DE POTION -->

<main>

    <section id="add-potion">
        <h1>Formulaire d'ajout de potion</h1>
        <form id="add-potion" action="add-potion.php" method="POST" enctype="multipart/form-data">

            <label for="potion">URL de l'image</label><br>
            <input type="text" name="image" id="image" required style="width: 100%; border-radius: 10px;"><br>

            <!-- <label for="upload">Choisir une image (Ordinateur)</label><br>
            <input type="file" name="upload" id="upload" required><br> -->

            <label for="titre">Titre de la potion</label><br>
            <input type="text" name="titre" id="titre" required style="width: 100%; border-radius: 10px;"><br>

            <label for="description">Description</label><br>
            <input type="text" name="description" id="description" required style="width: 100%; border-radius: 10px;"><br>

            <div style="width: 100%; display: flex; justify-content: center;">
                <input style="margin-bottom: 10px; text-align: center;" class="add" type="submit" value="Ajouter" id="">
                <a class="cancel" style="margin-bottom: 10px;" href="../pages/admin-pannel.php">Retour</a>
            </div>


        </form>
    </section>

</main>

<?php

// CHEMINEMENT DE LA REQUETE ON VERIFIE SI TOUTES LES INFOS SONT RECUPEREES
if (isset($_POST['image']) && isset($_POST['titre']) && isset($_POST['description'])) {

    // HTMLSPECIALCHARS PREND TOUT LES CARACTERES SPECIAUX
    $_POST['image'] = htmlspecialchars($_POST['image']);
    $_POST['titre'] = htmlspecialchars($_POST['titre']);
    $_POST['description'] = htmlspecialchars($_POST['description']);

    // REQUETE SQL PERMETTANT D'INSERER DANS LA TABLE POTIONS
    $sql = "INSERT INTO potions SET image = '$_POST[image]', titre = '$_POST[titre]', description = '$_POST[description]'";

    // PREPARATION DE LA REQUETE
    $stmt = $db->prepare($sql);

    // EXECUTION DE LA REQUETE
    $stmt->execute();

    // MESSAGE DE SUCCES
    echo "<img style='align-self: center; width: 10%;' src='../assets/imgs/success.png' alt='success'>";
    echo "<strong><p style='border-radius: 50px; padding: 10px; background-color: blue; color: white; text-align: center; font-size: 20px;'>Potion ajoutée avec succès !</p></strong>";
    echo "<br>";
    echo "<a style='margin-bottom: 10px;  align-self: center; width: 50%; text-align: center;' class='add' href='../pages/produits.php'>Retour à la liste des potions</a>";
}

// else {
// MESSAGE D'ERREUR
//     echo "<strong><p style='border-radius: 50px; padding: 10px; background-color: red; color: white; text-align: center; font-size: 20px;'>Veuillez remplir tous les champs !</p></strong>";
//     echo "<br>";
// }

?>

<?php

include 'footer.php';

?>

<!-- 
    
LIENS POUR DES POTIONS SUPPLEMENTAIRES A TITRE DE TEST
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