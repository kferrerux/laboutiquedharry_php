<?php

include dirname(__DIR__) . '/database/db-connect.php';
include dirname(__DIR__) . '/functions/potions.fn.php';

?>

<?php

// GESTION D'ERREUR VIA LA VUE (php.ini)
// -------------------------------------
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// -------------------------------------

$id = $_GET['id'];

deletePotion($db, $id);

// LA REDIRECTION EST EFFECTUEE COTEE CLIENT (AJAX ASYNC)

?>