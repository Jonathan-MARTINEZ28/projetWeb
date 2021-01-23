<?php

require 'Modele/connectBD.php';
require 'Modele/requestBD.php';
require 'Modele/message.php';

ob_start();
echo '<form action="controlleur_message.php" method="post">
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


$contenu = ob_get_clean();


require 'View/gabarit.php';
?>