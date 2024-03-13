<?php

include dirname(__DIR__) . '/database/db-connect.php';
include dirname(__DIR__) . '/functions/user.fn.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// CONDITION DE CONNEXION
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $adminUsername = $_POST['username'];
        $adminPassword = $_POST['password'];

        $result = login($db, $adminUsername, $adminPassword);

        if ($result['result'] == true) {

            header('Location: ../pages/admin-pannel.php');
            exit(); // ON S'ASSURE DE QUITTER SI TOUT SE PASSE BIEN

        } else {

            // ON AFFICHE LE MESSAGE D'ERREUR
            header('Location: ../pages/admin-login.php');
            echo '<p style="padding: 10px; text-align: center; width: 100%; background-color: red; font-size: 25px; font-weight: bold; align-self: center; color: white;">' .

                $result['msg']

                . '</p>';
        }
    }
}
