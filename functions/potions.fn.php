<?php

function findPotions($db)
{
    $sql = "SELECT * FROM potions;";
    $request = $db->query($sql);
    $result = $request->fetchAll();

    return $result;
}

function getPotionbyId($db, $id)
{
    $sql = "SELECT * FROM potions WHERE id = $id;";
    $request = $db->query($sql);
    $result = $request->fetch();

    return $result;
}

function addPotion($db, $image, $titre, $description)
{

    $sql = "INSERT INTO potions (image, titre, description) VALUES ('$image', '$titre', '$description');";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    return true;
}

function updatePotion($db, $id, $image, $titre, $description)
{

    $sql = "UPDATE potions SET image = '$image', titre = '$titre',
    description = '$description' WHERE id = $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    return true;
}

function deletePotion($db, $id)
{

    $sql = "DELETE FROM potions WHERE id = $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    return true;
}


/// AVANT

// RECUPERATION DE L'ID DE LA POTION
// $id = $_GET['id'];

// var_dump($_POST);

// ON VERIFIE SI TOUTES LES INFOS SONT RECUPEREES
// if (isset($_POST['image']) && isset($_POST['titre']) && isset($_POST['description'])) {

    // REQUETE SQL PERMETTANT DE MODIFIER DANS LA TABLE POTIONS
//     $sql = "UPDATE potions SET image = '$_POST[image]', titre = '$_POST[titre]', description = '$_POST[description]' WHERE id = $id";

    // PREPARATION DE LA REQUETE
//     $stmt = $db->prepare($sql);

    // EXECUTION DE LA REQUETE
//     $stmt->execute();

    // MESSAGE DE SUCCES
//     echo "<img style='align-self: center; width: 10%;' src='../assets/imgs/success.png' alt='success'>";
//     echo "<strong><p style='border-radius: 50px; padding: 10px; background-color: blue; color: white; text-align: center; font-size: 20px;'>Potion modifiée avec succès !</p></strong>";
//     echo "<br>";
//     echo "<a style='margin-bottom: 10px;  align-self: center; width: 50%; text-align: center;' class='add' href='../pages/produits.php'>Retour à la liste des potions</a>";
// }
