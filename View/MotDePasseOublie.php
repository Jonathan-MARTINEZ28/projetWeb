<?php
ob_start();

//formulaire de changement de mot de passe
echo '
    <form action="../Modele/gestionUser.php" method="post">
        <label for="pseudo">Identifiant:</label><br>
        <input type="text" id="pseudo" name="pseudo" required/><br>
        
        <label for="mail">E-mail</label><br>
        <input type="text" id="mail" name="mail" required/><br>
        
        <label for="newpass">Entrez votre nouveau mot de passe</label><br>
        <input type="password" id="newpass" name="newpass" required/><br>
        
        <label for="newpass2">Confirmez votre nouveau mot de passe</label><br>
        <input type="password" id="newpass2" name="newpass2" required/><br>
        
        <input type="submit" value="Changer de mot de passe" name="action" id="recup"/>
    </form><br>';
$contenu = ob_get_clean();
require 'gabarit.php';
?>