<?php
    require_once "Modele/message.php";
    ob_start();

    affichermessage();

    $contenu = ob_get_clean();
    require_once 'View/gabarit.php';
?>





