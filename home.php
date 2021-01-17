<?php
ob_start();
echo '<form action="home.php" method="get">
        <input type="text" name="message" placeholder="Message..."/>
        <input type="submit" name="envoyer" value="Envoyer"/>
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
echo $text;


$contenu = ob_get_clean();
require 'vues/gabarit.php';
?>