<?php
include 'utils.inc.php';

?>

<?php
ob_start();
echo '
    <form action="modele/gestionbd.php" method="post">
        <label for="pseudo">Pseudonyme</label><br>
        <input type="text" id="pseudo" name="pseudo"/><br>
        
        <label for="mail">Adresse mail</label><br>
        <input type="text" id="mail" name="mail"/><br>
        
        <label for="pass">Mot de passe</label><br>
        <input type="password" id="pass" name="pass"/><br>
        
        <label for="pass2">Confirmer votre mot de passe</label><br>
        <input type="password" id="pass2" name="pass2"/><br>
        
        <input type="checkbox" id="cgu" name="cgu" value="1">
        <label for="cgu">J\'accepte les conditions générales d\'utilisation</label><br>
        <input type="submit" value="Inscription" name="action" id="action" />
    </form>
    <a href="Connection.php">J\'ai déjà un compte</a><br>';

$contenu = ob_get_clean();
require 'vues/gabarit.php';
?>

