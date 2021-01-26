<?php
require 'Modele/message.php';
$dblink = getBD();

if(isset($_GET['t'],$_GET['id'])){
    session_start();
    $getid = $_GET['id'];
    $gett = $_GET['t'];
    $userid = $_SESSION['id'];
    session_abort();
    $requete = "INSERT INTO reaction (id_message, id_user, emoji)
                    VALUES ('$getid', '$userid', '$gett')";
    getRequest($dblink,$requete);
    $requete2 = "SELECT id, id_message, id_user, emoji FROM reaction WHERE id_user = '$userid' AND id_message = '$getid'";
    getRequest($dblink, $requete2);
    $dbResult = mysqli_query($dblink, $requete2);
    $resultat = mysqli_fetch_array($dbResult);
    if ($resultat['id_message'] == $getid && $resultat['id_user'] == $userid)

    if ($gett == 'love' ) {
        $query = "UPDATE messages SET love = love + 1 WHERE id = '$getid'";
        getRequest($dblink, $query);

    }
    elseif ($gett == 'cute' ) {
        $query = "UPDATE messages SET cute = cute + 1 WHERE id = '$getid'";
        getRequest($dblink, $query);
    }
    elseif($gett == 'tropstyle' ) {
        $query = "UPDATE messages SET tropstyle = tropstyle + 1 WHERE id = '$getid'";
        getRequest($dblink, $query);
    }
    elseif ($gett == 'swag' ) {
        $query = "UPDATE messages SET swag = swag + 1 WHERE id = '$getid'";
        getRequest($dblink, $query);
    }
    header("location:" . $_SERVER['HTTP_REFERER']);
}