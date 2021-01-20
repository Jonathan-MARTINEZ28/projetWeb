<?php

require 'Modele/connectBD.php';
require 'Modele/requestBD.php';

ob_start();
echo '<form action="home.php" method="post">
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
    getBD();

    $query = "INSERT INTO message (contenu_message) 
        VALUES ('$text')";
    getRequest();
    $dbRow = mysqli_fetch_assoc($dbResult);

    echo $dbRow;

}

$contenu = ob_get_clean();


require 'View/gabarit.php';
?>