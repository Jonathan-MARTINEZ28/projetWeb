<?php

require_once '../Modele/gestionBD.php';

require_once 'controlleur_set_n.php';
var_dump($_POST);


//ajout message avec BD
if ($_POST['envoyer'] == 'Envoyer')
{
    $message = $_POST['message'];
    $tag = $_POST['tag'];
    $dbLien = getBD();

    $query = "INSERT INTO messages (contenu, tag) 
        VALUES ('$message', '$tag')";
    getRequest($dbLien,$query);

  /*  $dbResult = mysqli_query($dbLien, $query);
    $dbRow = mysqli_fetch_assoc($dbResult);

    //echo $dbRow;

    $queryNbN = "SELECT nombre_n FROM n_generer";
    $dbResult = getRequest($dbLien, $queryNbN);
    $countLove = substr_count($dbRow, 'love');
    if ($countLove > $queryNbN){
        echo 'Faites un don de 10 bitcoins à Vanéstarre !';
    }*/

}

header("location: ../index.php");


//require_once 'home.php';
?>