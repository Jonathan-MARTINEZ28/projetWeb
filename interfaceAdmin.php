<?php

ob_start();
?>
    Réglage limite minimale et maximale paramétrables
    <form action="controlleur_set_n.php" method="post">
        <input type="number" name="n_min" placeholder="n-min"/>
        <input type="number" name="n_max" placeholder="n-max"/>
        <input type="submit" name="rec_n" value="Enregistrer">
    </form><br>
<?php
$contenu = ob_get_clean();
require 'View/gabarit.php';
?>