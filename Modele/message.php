<?php
require 'Modele/connectBD.php';
require 'Modele/requestBD.php';

function getMessage(){
    $dbLink = getBD();
    $query = "SELECT id, contenu, tag, love, cute, tropstyle, swag date FROM messages";
    getRequest($dbLink,$query);
    $dbResult = mysqli_query($dbLink, $query);
    return $dbResult;
}

function getSend(){
    $action_env = $_POST['envoyer'];
}

function affichermessage(){
    $dbResult = getMessage();
    while ($resultat = mysqli_fetch_array($dbResult)) {
        $id = $resultat['id'];
        echo $resultat['contenu'] . ' ' . 'β' .$resultat['tag'] . '<br>';
        echo '<a href="../gestionemoji.php?t=love&id=<?= $id ?>"><button >love</button></a><br>';


    }
}

