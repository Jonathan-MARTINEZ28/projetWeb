<?php
require_once 'Modele/connectBD.php';
require_once 'Modele/requestBD.php';
require_once 'Modele/n_set.php';
var_dump($_POST);


//ajout message avec BD
if (!empty($_POST)){
    $dbLien = getBD();

    $buttonRec = $_POST['rec_n'];
    $Nmin = $_POST['n_min'];
    $Nmax = $_POST['n_max'];
    $Nresult = rand($Nmin,$Nmax);

    //enregistrer dans la BD
    $query = "UPDATE n_generer
        SET nombre_n = ($Nresult)";
    $dbResultat = getRequest($dbLien,$query);
    //$dbRow =


}


require_once 'interfaceAdmin.php';

