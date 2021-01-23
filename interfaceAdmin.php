<?php
    ob_start();
    echo 'Réglage limite minimale et maximale paramétrables
        <form action="" method="post">
        <input type="text" name="n_min" placeholder="n-min"/>
        <input type="text" name="n_max" placeholder="n-max"/>
        
    </form><br>';
$contenu = ob_get_clean();
require 'View/gabarit.php';
?>