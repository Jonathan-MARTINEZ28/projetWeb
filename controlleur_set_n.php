<?php
require_once 'Modele/connectBD.php';
require_once 'Modele/requestBD.php';
require_once 'Modele/n_set.php';
var_dump($_POST);



if (!empty($_POST)){//
    $dbLien = getBD();

    $buttonRec = $_POST['rec_n'];//récupération valeur bouton 'Enregistrer'
    $Nmin = $_POST['n_min'];//récupération valeur n minimale
    $Nmax = $_POST['n_max'];//récupération valeur n maximale
    $Nresult = rand($Nmin,$Nmax); // générer valeur n entre n_min et n_max

    //enregistrer dans la BD
    $query = "UPDATE n_generer
        SET nombre_n = ($Nresult)";
    $dbResultat = getRequest($dbLien,$query);
    //$dbRow =


}


require_once 'interfaceAdmin.php';

