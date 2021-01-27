<?php
require 'gestionBD.php';

$action = $_POST["action"];

//A modifier


$dbLink = getBD(); // Connexion à la Base de Données

//Inscription
if($action == 'Inscription')
{
    $mdp = $_POST['pass'];
    $mdp2 = $_POST['pass2'];
    $cgu = $_POST['cgu'];
    $mail = $_POST["mail"];
    $pseudo = $_POST["pseudo"];

    if ($mdp == $mdp2 && strlen($mdp2) >= 8 && $cgu == 1) {
            // Hachage du mot de passe
            $mdp_hache = password_hash($mdp, PASSWORD_DEFAULT);

            //ajout d'un utilisateur
            $query = "INSERT INTO user (pseudo, mail, password) 
            VALUES ('$pseudo', '$mail', '$mdp_hache')";

            getRequest($dbLink, $query);


            header('Location: ../index.php');
            exit();

    }
    if ($mdp != $mdp2 && $cgu == 1 && $action == 'Inscription'){
        //header('Location: error.php');
        exit();
    }
}


//Connexion
if ($action == 'Connection'){
    $mail = $_POST["mail"];
    $mdp = $_POST["pass"];
    $pseudo = $_POST["pseudo"];

    $query = "SELECT id, password, mail FROM user WHERE pseudo = '$pseudo'";
    $dbResult = mysqli_query($dbLink, $query);
    $resultat = mysqli_fetch_array($dbResult);

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($mdp, $resultat['password']);

    if (!$resultat) {

        //echo 'Mauvais identifiant ou mot de passe !';
        header('Location: error.php');
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


//Changement Mot de passe

if ($action == 'Changer de mot de passe') {
    $pseudo = $_POST['pseudo'];
    $newmdp = $_POST['newpass'];
    $newmdp2 = $_POST['newpass2'];
    $mail = $_POST["mail"];

    if ($mail != '' && $pseudo != '' && $newmdp != '' && $newmdp == $newmdp2) {
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
}

//Changement du pseudo
if ($action == 'changer de pseudo')
    {
        $newpseudo = $_POST['newpseudo'];
        session_start();
        $id = $_SESSION['id'];

    if ($newpseudo != '' && $newpseudo != S_SESSION['pseudo']) {

        $query = "UPDATE user SET pseudo = '$newpseudo' WHERE id = '$id'";
        $_SESSION['pseudo'] = $newpseudo;

        getRequest($dbLink, $query);
    }
}

//Changement de l'addresse e-mail

if ($action == 'changer d\'adresse mail'){
    $newmail = $_POST['newmail'];
    session_start();
    $id = $_SESSION['id'];

    if ($newmail != '' && $newmail != $_SESSION['mail']){

        $query = "UPDATE user SET mail = '$newmail' WHERE id = '$id'";
        $_SESSION['mail'] = $newmail;

        getRequest($dbLink, $query);
    }
}



//redirige vers la page d'acceuil
header('Location: ../index.php');
exit();

?>
