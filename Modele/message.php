<?php
require 'gestionBD.php';


//fonction récupérant les messages de la base de donnée
function getMessage(){
    $dbLink = getBD();
    $query = "SELECT id, contenu, tag, love, cute, tropstyle, swag, date FROM messages";
    getRequest($dbLink,$query);
    $dbResult = mysqli_query($dbLink, $query);
    return $dbResult;
}

function getSend(){
    $action_env = $_POST['envoyer'];
}

//fonction affichant les messages et la possibilité d'y réagir
function affichermessage(){
    $dbResult = getMessage();
    while ($resultat = mysqli_fetch_array($dbResult)) {
        $id = $resultat['id'];
        echo $resultat['contenu'] . ' ' . 'β' .$resultat['tag'] . '<br>';
        echo "<a href='Modele/gestionemoji.php?t=love&id=" . $id . " '><button >Love</button></a>" . $resultat['love'] . ' ' .
             "<a href='Modele/gestionemoji.php?t=cute&id=" . $id . " '><button >Cute</button></a>" . $resultat['cute'] . ' ' .
             "<a href='Modele/gestionemoji.php?t=tropstyle&id=" . $id . " '><button >Trop stylé</button></a>" . $resultat['tropstyle'] . ' ' .
             "<a href='Modele/gestionemoji.php?t=swag&id=" . $id . " '><button >Swag</button></a>" . $resultat['swag'] . '<br><br>';

    }
}

