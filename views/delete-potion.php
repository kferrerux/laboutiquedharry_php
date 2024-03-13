<?php

include '../database/db-connect.php';

// RECUPERATION DE L'ID DE LA POTION
$id = $_GET['id'];

// REQUETE
$sql = "DELETE FROM potions WHERE id= $id";

// PREPARATION DE LA REQUETE
$stmt = $db->prepare($sql);

// EXECUTION DE LA REQUETE
$stmt->execute();

// REDIRECTION
header('location: ../pages/produits.php');
