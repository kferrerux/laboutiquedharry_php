<?php

include dirname(__DIR__) . 'database/db-connect.php';
include dirname(__DIR__) . '/views/header.php';

?>


<!-- FORMULAIRE DE CONNEXION ADMINSTRATEUR -->

<main>

    <section id="admin-login">

        <div id="admin-banner">
        </div>

        <div class="admindiv">

            <!-- <img style="width: 10%; align-self: center; margin-bottom: 20px;" src="../assets/imgs/admin-login-img.png" alt="admin"> -->
            <h1 style="font-size: 50px;">Acces administrateur</h1>

            <form id="admin-login" action="../controllers/admin-login.php" method="POST">

                <label for="username">Nom d'utilisateur</label><br>
                <input type="text" name="username" id="username" required placeholder="Nom d'utilisateur" style="width: 100%; border-radius: 10px;"><br>

                <label for="password">Mot de passe</label><br>
                <input type="password" name="password" id="password" placeholder="Mot de passe" required style="width: 100%; border-radius: 10px; margin-bottom: 20px;"><br>

                <input style="width: 100%; border-radius: 10px;" class="add" type="submit" value="Connexion" id="submitadmin">
                <hr>

            </form>

        </div>

    </section>

</main>

<?php

include dirname(__DIR__) . '/views/footer.php';

?>