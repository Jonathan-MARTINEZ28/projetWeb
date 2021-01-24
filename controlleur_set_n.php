<?php

require_once 'Modele/n_set.php';
var_dump($_POST);


//ajout message avec BD
if (!empty($_POST)){
    $buttonRec = $_POST['rec_n'];
    $Nmin = $_POST['n_min'];
    $Nmax = $_POST['n_max'];
    $Nresult = rand($Nmin,$Nmax); // A enregistrer dans la BD
}





require_once 'interfaceAdmin.php';
?>
