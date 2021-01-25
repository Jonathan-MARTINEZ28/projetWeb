<?php
    ob_start();
    require 'Modele/connectBD.php';
    require 'Modele/requestBD.php';

    $dbLink = getBD();

    $query = "SELECT id, contenu, tag, date FROM messages";

    getRequest($dbLink,$query);

    $dbResult = mysqli_query($dbLink, $query);


    while ($resultat = mysqli_fetch_array($dbResult)) {
        echo $resultat['contenu'] . ' ' . 'β' .$resultat['tag'] . '<br>';


    }



    $contenu = ob_get_clean();
    require 'View/gabarit.php';
?>





