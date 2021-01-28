
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

//fonction affichant les messages et la possibilité d'y réagir
function affichermessage(){
    $dbResult = getMessage();
    while ($resultat = mysqli_fetch_array($dbResult)) {
        $id = $resultat['id'];
        $nbLove = $resultat['love'];
        $nbCute = $resultat['cute'];
        $nbTropsyle = $resultat['tropstyle'];
        $nbSwag = $resultat['swag'];
        echo $resultat['contenu'] . ' ' . 'β' .$resultat['tag'] . '<br>';
        echo "<a href='Modele/gestionemoji.php?t=love&id=" . $id . "' class='love'><i class='fas fa-heart'></i>love $nbLove </a>" . ' ' .
             "<a href='Modele/gestionemoji.php?t=cute&id=" . $id . "' class='cute'><i class='fas fa-cat'></i>Cute $nbCute</a>" . ' ' .
             "<a href='Modele/gestionemoji.php?t=tropstyle&id=" . $id ."' class='tropstyle'><i class='fas fa-user-tie'></i>Trop stylé $nbTropsyle</a>" .  ' ' .
             "<a href='Modele/gestionemoji.php?t=swag&id=" . $id . "' class='swag'><i class='fab fa-angellist'></i>Swag $nbSwag</a>" . '<br><br>';

    }
}

