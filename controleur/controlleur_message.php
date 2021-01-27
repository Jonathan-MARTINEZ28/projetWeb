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

    $requete = "SELECT val_min, val_max FROM valeurs_don WHERE id = 1";
    getRequest($dbLien, $requete);
    $dbResult = mysqli_query($dbLien, $requete);
    $resultat = mysqli_fetch_array($dbResult);
    $Nresult = rand($resultat['val_min'],$resultat['val_max']); // générer valeur n entre n_min et n_max

    $query = "INSERT INTO messages (contenu, tag, n_don) 
        VALUES ('$message', '$tag', '$Nresult')";
    getRequest($dbLien,$query);

}

header("location: ../index.php");


//require_once 'home.php';
?>