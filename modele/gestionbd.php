<?php
function add_user($id, $sexe, $mail, $mdp, $phone, $pays, $cgu)
{
    $dbLink = mysqli_connect('localhost', 'root','' )
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink , 'td2')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = "INSERT INTO user (identifiant, civilite, mail, password, phone, pays, cgu) 
        VALUES ('$id', '$sexe', '$mail', '$mdp', '$phone', '$pays', '$cgu')";

    if(!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur dans requête<br />'; // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
}
