<?php


function getRequest($dbLink,$query) {
    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur dans requête<br />'; // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
        return $dbResult;
    }
}
