<?php

include dirname(__DIR__) . 'database/db-connect.php';
include dirname(__DIR__) . '/views/header.php';

?>

<!-- CONTAINER PRINCIPALE - LE CTA MENE A LA BOUTIQUE -->
<main class="main">
    <h1 class="title">Une sélection de remèdes</h1>
    <a class="cta" href="produits.php">Découvrir</a>
</main>

<!-- A PROPOS -->
<section class="about">
    <div class="about-img">
    </div>
    <div class="about-txt">
        <h2>A propos</h2>
        <p><strong>Bienvenue sur La boutique d'Harry</strong>
            . Nous transformons les sorts de guérison emblématiques de la saga en potions magiques consommables.
            Chaque potion est méticuleusement conçue pour offrir des bienfaits similaires à ceux des sorts
            originaux,
            créant une expérience immersive pour les fans de l'oeuvre de J.K Rowling et les curieux.
        </p>
    </div>
</section>

<?php

include dirname(__DIR__) . '/views/footer.php';

?>