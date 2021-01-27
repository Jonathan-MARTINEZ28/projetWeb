<?php
require 'message.php';
$dblink = getBD();

if(isset($_GET['t'],$_GET['id'])){
    session_start();
    $getid = $_GET['id']; //récupère l'id du message
    $gett = $_GET['t']; //récupère l'émoji sur lequel on clique
    $userid = $_SESSION['id']; //récupère l'id de l'utilisateur
    session_abort();

    if (!isset($userid)){header("location:" . $_SERVER['HTTP_REFERER']);}//empêche un utilisateur non connecté de réagir aux messages

    //selectionne les valeurs de la table reaction pour le message sélectionné et l'utilisateur courant
    $requete2 = "SELECT id, id_message, id_user, emoji FROM reaction WHERE id_user = '$userid' AND id_message = '$getid'";
    getRequest($dblink, $requete2);
    $dbResult = mysqli_query($dblink, $requete2);
    $resultat = mysqli_fetch_array($dbResult);
    $previousreaction = $resultat['emoji'];//émoji sur lequel l'utilisateur à cliqué précédemment
    $reactid = $resultat['id'];//id de la réaction

    //si l'utilisateur à déjà réagi à ce message, enlève sa réaction précédente des tables réactions et messages
    if ($resultat['id_message'] == $getid && $resultat['id_user'] == $userid){
        $requete3 = "UPDATE messages SET $previousreaction = $previousreaction - 1 WHERE id = $getid";
        $requete4 = "DELETE FROM reaction WHERE id_message = $getid";
        getRequest($dblink, $requete3);
        getRequest($dblink, $requete4);
    }
    //ajoute la réaction de l'utilisateur
    $requete = "INSERT INTO reaction (id_message, id_user, emoji)
                    VALUES ('$getid', '$userid', '$gett')";
    getRequest($dblink,$requete);

    //réaction love
    if ($gett == 'love' ) {
        $query = "UPDATE messages SET love = love + 1 WHERE id = '$getid'";
        getRequest($dblink, $query);

    }

    //réaction cute
    elseif ($gett == 'cute' ) {
        $query = "UPDATE messages SET cute = cute + 1 WHERE id = '$getid'";
        getRequest($dblink, $query);
    }

    //réaction trop stylé
    elseif($gett == 'tropstyle' ) {
        $query = "UPDATE messages SET tropstyle = tropstyle + 1 WHERE id = '$getid'";
        getRequest($dblink, $query);
    }

    //réaction swag
    elseif ($gett == 'swag' ) {
        $query = "UPDATE messages SET swag = swag + 1 WHERE id = '$getid'";
        getRequest($dblink, $query);
    }

    //retour à la page précédente
    header("location:" . $_SERVER['HTTP_REFERER']);
}