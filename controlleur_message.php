<?php

require_once 'Modele/connectBD.php';
require_once 'Modele/requestBD.php';
require_once 'Modele/message.php';
var_dump($_POST);
ob_start();

//ajout message avec BD
if ($_POST['envoyer'] == 'Envoyer')
{
    getBD();

    $query = "INSERT INTO message (contenu_message) 
        VALUES ('".$_POST['message'] . "')";
    getRequest();
    $dbRow = mysqli_fetch_assoc($dbResult);

    echo $dbRow;

}

$contenu = ob_get_clean();


require_once 'View/gabarit.php';
?>