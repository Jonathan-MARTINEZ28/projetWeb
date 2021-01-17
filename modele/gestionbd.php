<?php
$action = $_POST["action"];
$pseudo = $_POST["pseudo"];
$mail = $_POST["mail"];
$mdp = $_POST["pass"];
$mdp2 = $_POST["pass2"];
$cgu = $_POST["cgu"];

//conection à la base de données
$dbLink = mysqli_connect('localhost', 'root', '')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink, 'vanestarre')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

if ($mdp == $mdp2 && strlen($mdp2) >= 8 && $cgu == 1 && $action == 'Inscription'){
    // Hachage du mot de passe
    $mdp_hache = password_hash($mdp, PASSWORD_DEFAULT);

    //ajout d'un utilisateur
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

if ($action == 'Connection'){
    $query = "SELECT id, password FROM user WHERE pseudo = '$pseudo'";
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
            echo 'Vous êtes connecté !';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }
}

//redirige vers la page d'acceuil
header('Location: ../index.php');

?>
