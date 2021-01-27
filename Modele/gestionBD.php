<?php

//Permet la connexion à la Base de données et de selectionnner la base
function getBD(){
    $dbLink = mysqli_connect('localhost', 'root', '')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink, 'vanestarretest')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    //var_dump($dbLink);
    return $dbLink;

}

//permet la requête à la Base de Données
function getRequest($dbLink,$query) {
    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur dans requête<br />'; // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();

    }
}
