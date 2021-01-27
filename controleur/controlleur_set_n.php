<?php
require_once '../Modele/gestionBD.php';
require_once '../Modele/n_set.php';



if ($_POST['rec_n'] == "Enregistrer" && isset($_POST['n_min']) && isset($_POST['n_max'])){

    $dbLien = getBD();

    $Nmin = $_POST['n_min'];//récupération valeur n minimale
    $Nmax = $_POST['n_max'];//récupération valeur n maximale

    //enregistrer dans la BD
    $query = "UPDATE valeurs_don
        SET val_min = '$Nmin', val_max = '$Nmax'
        WHERE id = 1";
    getRequest($dbLien,$query);

}

header ("location: ../interfaceAdmin.php");

