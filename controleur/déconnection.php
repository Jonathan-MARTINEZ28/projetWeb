<?php
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

//redirige vers la page d'acceuil
header('Location: ../index.php');
?>