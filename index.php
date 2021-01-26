<?php
    require "Modele/message.php";
    ob_start();
    affichermessage();


    $contenu = ob_get_clean();
    require 'View/gabarit.php';
?>





