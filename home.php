<?php
ob_start();
echo '<form action="home.php" method="get">
        <input type="text" name="message" id="message" placeholder="Message..."/>
        <input type="submit" name="envoyer" id ="envoyer" value="Envoyer"/>
</form>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><br>
    <select name="pays" id="pays">
            <option value=""></option>
            <option value="fr">love</option>
            <option value="jp">cute</option>
            <option value="us">trop stylé</option>
            <option value="us">swag</option>
        </select><br>
    ';

$text = $_GET['message'];
//echo $text;
$action_env = $_GET['envoyer'];

//ajout message avec BD
if ($action_env == 'Envoyer')
{
    $dbLink = mysqli_connect('localhost','root', '')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink,'vanestarre')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = "INSERT INTO message (contenu_message) 
        VALUES ('$text')";
    if(!($dbResult = mysqli_query($dbLink, $query)))
    {
        echo 'Erreur de requête<br/>';
        echo  'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
    $dbRow = mysqli_fetch_assoc($dbResult);

    echo $dbRow;

}






$contenu = ob_get_clean();
require 'vues/gabarit.php';
?>