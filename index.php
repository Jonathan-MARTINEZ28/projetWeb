<?php
    ob_start();
    echo '
    <a href="Connection.php"><button>Se connecter</button></a><br>
    <a href="Inscription.php"><button>S\'inscrire</button></a><br>
    <a href="déconnection.php"><button>déconnection</button></a><br>';

    $dbLink = mysqli_connect('localhost', 'root', '')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink, 'vanestarretest')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    require 'Modele/requestBD.php';

    $query = "SELECT contenu, tag, date FROM messages";

    getRequest($dbLink,$query);

    $dbResult = mysqli_query($dbLink, $query);
    $resultat = mysqli_fetch_array($dbResult);

        echo $resultat['contenu'];


$contenu = ob_get_clean();
    require 'View/gabarit.php';
?>





