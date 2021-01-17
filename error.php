<?php
ob_start();
echo '
    <a href="Connection.php">Se connecter</a><br>
        <a href="Inscription.php">S\'inscrire</a><br>
        <h3>Erreur : Mauvais id ou mot de passe</h3><br>
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