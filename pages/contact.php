<?php

include dirname(__DIR__) . '/database/db-connect.php';
include dirname(__DIR__) . '/views/header.php';

?>

<!-- FORMULAIRE DE CONTACT -->
<section id="contact-container">

    <img class="map" src="../assets/imgs/preaulardmap.jpg" alt="map">

    <div class="form">

        <h2>Nous contacter</h2>
        <h4>Nous répondons à toutes vos questions.</h4>
        <div class="form-line"></div>

        <form action="form.php">

            <label for="username">Nom/Prénom(s)</label>
            <input id="username" type="text" placeholder="Nom/Prénom(s)">

            <label for="email">Votre mail</label>
            <input id="email" type="email" placeholder="Votre mail ici">

            <label for="message">Entrez votre message</label>
            <textarea name="message" id="message" placeholder="Laissez-nous vos coordonnées"></textarea>

            <button type="submit">Envoyer</butaton>

        </form>
    </div>

</section>

<?php

include dirname(__DIR__) . '/views/footer.php';

?>