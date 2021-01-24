<?php


function getBD(){
    $dbLink = mysqli_connect('localhost', 'root', '')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink, 'vanestarretest')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    //var_dump($dbLink);
    return $dbLink;

}
