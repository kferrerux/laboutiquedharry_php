<?php

include dirname(__DIR__) . 'database/db-connect.php';
include dirname(__DIR__) . '/views/header.php';

session_start();

?>


<!-- PANNEAU D'ADMINISTRATION -->

<?php

if (isset($_SESSION['admin'])) {

    echo


    '<main>

        <section id="admin-pannel">

            <div class="admindiv">

                <h1 style="font-size: 50px;">Panneau d\'administration</h1>
                <p>Bienvenue dans la page d\'administration</p>
                <img style="width: 100px;" src="../assets/imgs/success.png" alt="">

            </div>

            <div id="cards">

                <div class="card">
                <a href="../views/add-potion.php"><i style="font-size: 50px; color: green" class="fa-solid fa-plus"></i></a>
                    <h2>Ajouter une potion</h4>
                </div>

                <div class="card">
                <a href="../pages/produits.php"><i style="font-size: 50px; color: green" class="fa-solid fa-pen-to-square"></i></a>
                    <h2>Modifier une potion</h4>
                </div>

            </div>

        </section>

    </main>';
} else {

    header('Location: ../pages/admin-login.php');
}

?>

<?php

include dirname(__DIR__) . '/views/footer.php';

?>