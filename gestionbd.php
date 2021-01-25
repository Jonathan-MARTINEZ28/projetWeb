<?php
require 'Modele/connectBD.php';
require 'Modele/requestBD.php';

$action = $_POST["action"];
$pseudo = $_POST["pseudo"];
$mail = $_POST["mail"];
$mdp = $_POST["pass"];
$mdp2 = $_POST["pass2"];
$cgu = $_POST["cgu"];

//conection à la base de données
/*$dbLink = mysqli_connect('localhost', 'root', '')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink, 'vanestarretest')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));*/

$dbLink = getBD();

//Inscription
if ($mdp == $mdp2 && strlen($mdp2) >= 8 && $cgu == 1 && $action == 'Inscription'){
    if ($mdp == $mdp2 && strlen($mdp2) >= 8 && $cgu == 1){
    // Hachage du mot de passe
    $mdp_hache = password_hash($mdp, PASSWORD_DEFAULT);

    //ajout d'un utilisateur
    $query = "INSERT INTO user (pseudo, mail, password) 
        VALUES ('$pseudo', '$mail', '$mdp_hache')";

    getRequest($dbLink, $query);


    header('Location: index.php');
    exit();
    }
}
if ($mdp != $mdp2 && $cgu == 1 && $action == 'Inscription'){
    header('Location: error.php');
    exit();
}

//Connexion
if ($action == 'Connection'){
    $query = "SELECT id, password, mail FROM user WHERE pseudo = '$pseudo'";
    $dbResult = mysqli_query($dbLink, $query);
    $resultat = mysqli_fetch_array($dbResult);

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($mdp, $resultat['password']);

    if (!$resultat) {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mail'] = $resultat['mail'];
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }
}

$newmdp = $_POST['newpass'];
$newmdp2 = $_POST['newpass2'];
if ($action == 'Changer de mot de passe' && $mail != '' && $pseudo != '' && $newmdp != '' && $newmdp == $newmdp2 ){
    $newmdp = password_hash($newmdp, PASSWORD_DEFAULT);
    $query = "UPDATE user SET password = '$newmdp' WHERE pseudo = '$pseudo' AND mail = '$mail'";

    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur dans requête<br />'; // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
}

$newpseudo = $_POST['newpseudo'];
session_start();
$id = $_SESSION['id'];
if ($action == 'changer de pseudo' && $newpseudo != '' && $newpseudo != $_SESSION['pseudo']){

    $query = "UPDATE user SET pseudo = '$newpseudo' WHERE id = '$id'";
    $_SESSION['pseudo'] = $newpseudo;
    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur dans requête<br />'; // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
}

$newmail = $_POST['newmail'];
if ($action == 'changer d\'adresse mail' && $newmail != '' && $newmail != $_SESSION['mail']){

    $query = "UPDATE user SET mail = '$newmail' WHERE id = '$id'";
    $_SESSION['mail'] = $newmail;
    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur dans requête<br />'; // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
}



//redirige vers la page d'acceuil
header('Location: index.php');
exit();

?>
