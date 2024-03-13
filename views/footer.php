<!-- FOOTER AVEC UTILISATION DE FONTAWESOME -->
<footer class="footer">
    <div class="f-about">
        <h4>Résumé</h4>
        <p>La boutique d'Harry est un site web réalisé en cours de formation</p>
    </div>
    <div class="f-infos">
        <h4>Informations</h4>
        <ul>
            <li>118 Boulevard Pré-au-lard</li>
            <li>04.42.00.00.00</li>
            <li>laboutiquedharry@pro.com</li>
        </ul>
    </div>
    <div class="f-quicklinks">
        <h4>Liens rapides</h4>
        <ul>
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="produits.php">PRODUITS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <?php

            // SI L'UTILISATEUR EST ADMIN
            if (isset($_SESSION['admin'])) {

                echo '<li><a href="admin-pannel.php">ADMINISTRATION</a></li>';
            }

            ?>
        </ul>
    </div>
    <div class="f-socials">
        <h4>Nous suivre</h4>
        <ul class="socialsflex">
            <li><a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a></li>
            <li><a href="https://instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://tiktok.com" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
            <li><a href="https://facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
        </ul>
    </div>
</footer>

</body>

</html>