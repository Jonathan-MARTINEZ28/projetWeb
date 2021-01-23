<?php
ob_start();
echo '
    <form action="gestionbd.php" method="post">
        <label for="pseudo">Identifiant:</label><br>
        <input type="text" id="pseudo" name="pseudo"/><br>
        
        <label for="mail">E-mail</label><br>
        <input type="text" id="mail" name="mail"/><br>
        
        <label for="newpass">Entrez votre nouveau mot de passe</label><br>
        <input type="password" id="newpass" name="newpass"/><br>
        
        <label for="newpass2">Confirmez votre nouveau mot de passe</label><br>
        <input type="password" id="newpass2" name="newpass2"/><br>
        
        <input type="submit" value="Changer de mot de passe" name="action" id="recup"/>
    </form><br>';
$contenu = ob_get_clean();
require 'vues/gabarit.php';
?>