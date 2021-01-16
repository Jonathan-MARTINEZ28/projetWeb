<?php

$action = $_POST["action"];
$pseudo = $_POST["pseudo"];
$mail = $_POST["mail"];
$mdp = $_POST["pass"];
$mdp2 = $_POST["pass2"];
$cgu = $_POST["cgu"];

$dbLink = mysqli_connect('localhost', 'root', '')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink, 'vanestarreTest')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

if ($mdp == $mdp2 && $cgu == 1 && $action == 'inscription'){
    // Hachage du mot de passe
    $mdp_hache = password_hash($mdp, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (pseudo, mail, password) 
        VALUES ('$pseudo', '$mail', '$mdp_hache')";

    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur dans requête<br />'; // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
}

if ($action == 'connection'){
    $query = "SELECT id, password FROM user WHERE pseudo = pseudo";
    $resultat = $query->fetch();
}

header('Location: ../index.php');
?>
