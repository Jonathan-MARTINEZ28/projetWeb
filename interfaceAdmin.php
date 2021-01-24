<?php
    require 'controlleur_set_n.php';
    ob_start();
    echo 'Réglage limite minimale et maximale paramétrables
        <form action="controlleur_set_n.php" method="post">
        <input type="text" name="n_min" placeholder="n-min"/>
        <input type="text" name="n_max" placeholder="n-max"/>
        <input type="submit" name="rec_n" value="Enregistrer">
        
    </form><br>';
$contenu = ob_get_clean();
echo $Nresult;
require 'View/gabarit.php';
?>