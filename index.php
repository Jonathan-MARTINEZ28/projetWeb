<?php
    ob_start();
    echo '
    <a href="Connection.php">Se connecter</a><br>
    <a href="Inscription.php">S\'inscrire</a><br>
    <a href="modele/déconnection.php.php">déconnection</a><br>
    <h3>message</h3><br>
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
    require 'vues/gabarit.php';
?>





