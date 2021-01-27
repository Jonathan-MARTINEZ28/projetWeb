<?php
require_once '../Modele/gestionBD.php';
require_once '../Modele/n_set.php';
var_dump($_POST);



if (!empty($_POST)){//
    $dbLien = getBD();

    $buttonRec = $_POST['rec_n'];//récupération valeur bouton 'Enregistrer'
    $Nmin = $_POST['n_min'];//récupération valeur n minimale
    $Nmax = $_POST['n_max'];//récupération valeur n maximale
    $Nresult = rand($Nmin,$Nmax); // générer valeur n entre n_min et n_max

    //enregistrer dans la BD
    $query = "UPDATE messages
        SET n_don = ('$Nresult')";
    getRequest($dbLien,$query);
    //$dbRow =


}


require_once 'interfaceAdmin.php';

