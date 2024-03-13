<?php

// CONNEXION A LA BASE DE DONNEES
try {
    // On instancie l'objet PDO :
    $db = new PDO("mysql:host=localhost; dbname=laboutiquedharry", "root", "EdenManon.");
    // On envoi nos requetes en utf8 :
    $db->exec("SET NAMES utf8");
    // On definit le mode de fetch par defaut : (plus besoin de le préciser par la suite)
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;
} catch (PDOException $e) {
    echo $e->getMessage();
}
