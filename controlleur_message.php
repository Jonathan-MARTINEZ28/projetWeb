<?php

require_once 'Modele/connectBD.php';
require_once 'Modele/requestBD.php';
require_once 'Modele/message.php';
require_once 'controlleur_set_n.php';
var_dump($_POST);
ob_start();

//ajout message avec BD
if ($_POST['envoyer'] == 'Envoyer')
{
    $dbLien = getBD();

    $query = "INSERT INTO messages (contenu) 
        VALUES ('".$_POST['message'] . "')";
    $dbResult = getRequest($dbLien, $query);
    $dbRow = mysqli_fetch_assoc($dbResult);

    //echo $dbRow;

    $query1 = "SELECT nombre_n FROM n_generer";
    $dbResult = getRequest($dbLien, $query1);
    $countLove = substr_count($dbRow, 'love');
    if ($countLove > $query1){
        echo 'Faites un don de 10 bitcoins à Vanéstarre !';
    }

}

$contenu = ob_get_clean();


require_once 'home.php';
?>