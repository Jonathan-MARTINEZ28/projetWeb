<?php
ob_start();

//formulaire de connection
echo '
    <form action="../Modele/gestionUser.php" method="post">
        <label for="pseudo">Identifiant:</label><br>
        <input type="text" id="pseudo" name="pseudo" required/><br>
        
        <label for="mail">E-mail</label><br>
        <input type="text" id="mail" name="mail" required/><br>
        
        <label for="pass">Mot de passe</label><br>
        <input type="password" id="pass" name="pass" required/><br>
        
        <input type="submit" value="Connection" name="action" id="action" />
    </form><br>
    
    <!--lien vers la page de réinitilaisation du de passe -->
    <a href="MotDePasseOublie.php"><button>J\'ai oublié mon mot de passe </button></a>';

$contenu = ob_get_clean();
require 'gabarit.php';
?>

