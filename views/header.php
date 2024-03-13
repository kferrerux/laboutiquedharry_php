<?php

include 'database/db-connect.php';

if (empty($_SESSION['id'])) {

    session_start();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/mediaqueries.css">
    <script defer src="../js/main.js"></script>
    <script defer src=" https://kit.fontawesome.com/a95fff360e.js" crossorigin="anonymous">
    </script>
    <title>La boutique d'Harry - Produits</title>
</head>

<body>

    <header class="header">
        <!-- ELEMENTS DE LA NAVBAR MOBILE RESPONSIVE -->
        <a href="../pages/index.php"><img id="logo" src="../assets/imgs/logo.png" alt="Logo"></a>
        <a href="../pages/index.php"><img id="logomobile" src="../assets/imgs/logo_mobile.png" alt="Logo"></a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class="fa-solid fa-bars" id="iconMenu"></i>
            <i class="fa-solid fa-xmark" id="iconX"></i>
        </label>

        <nav class="main-nav">

            <div class="nav">
            </div>

            <ul>

                <li><a href="../pages/index.php">ACCUEIL</a></li>
                <li><a href="../pages/produits.php">PRODUITS</a></li>
                <li><a href="../pages/contact.php">CONTACT</a></li>
                <?php

                // SI L'UTILISATEUR EST ADMIN
                if (isset($_SESSION['admin'])) {

                    echo '
                    <li><a id="adminli" href="../pages/admin-pannel.php">ADMINISTRATION</a></li>
                    <p style = "color : #ff0040; font-size : 12px;"><strong>Connecté en tant qu\'Administrateur</p></strong>';
                }

                ?>

                <?php

                // SI L'UTILISATEUR EST ADMIN
                if (isset($_SESSION['admin'])) {
                } else {

                    echo '<div>
                <a id="admin" style="margin-left : 10px; color : #313030;" href="admin-login.php"><i class="fa-solid fa-gear"></i></a>
                </div>';
                }


                ?>

            </ul>

            <?php

            // SI L'UTILISATEUR EST ADMIN
            if (isset($_SESSION['admin'])) {

                echo '<a id="logout" style=" margin-left : 10px; color : #ff264a;" href="../database/session-logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>';
            }

            ?>



        </nav>

    </header>