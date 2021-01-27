<?php
    ob_start();

    //formualire d'inscription
echo '
    <form action="../Modele/gestionUser.php" method="post">
        <label for="pseudo">Pseudonyme</label><br>
        <input type="text" id="pseudo" name="pseudo" required/><br>
        
        <label for="mail">Adresse mail</label><br>
        <input type="text" id="mail" name="mail" required/><br>
        
        <label for="pass">Mot de passe</label><br>
        <input type="password" id="pass" name="pass" required/><br>
        
        <label for="pass2">Confirmer votre mot de passe</label><br>
        <input type="password" id="pass2" name="pass2" required/><br>
        
        <input type="checkbox" id="cgu" name="cgu" value="1">
        <label for="cgu">J\'accepte les conditions générales d\'utilisation</label><br>
        <input type="submit" value="Inscription" name="action" id="action" required/>
    </form>
    
    <a href="Connection.php"><button>J\'ai déjà un compte</button></a><br>';

    $contenu = ob_get_clean();
    require 'gabarit.php';
?>

