<?php

require 'Modele/n_set.php';
var_dump($_POST);
ob_start();

//ajout message avec BD
if ($buttonRec == 'Enregistrer')
{
    getN();
    $Nresult = rand($Nmin,$Nman);

}

$contenu = ob_get_clean();


require 'View/gabarit.php';
?>
