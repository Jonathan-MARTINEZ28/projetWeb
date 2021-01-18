<?php
ob_start();
echo '
    <form action="modele/gestionbd.php" method="post">
        <label for="pseudo">Identifiant:</label><br>
        <input type="text" id="pseudo" name="pseudo"/><br>
        <label for="mail">E-mail</label><br>
        <input type="text" id="mail" name="mail"/><br>
        <label for="pass">Mot de passe</label><br>
        <input type="password" id="pass" name="pass"/><br>
        <!--<label for="stay">Rester connecté</label><br>
        <input type="checkbox" id="stay" name="stay" value="1"/><br>-->
        <input type="submit" value="Connection" name="action" id="action" />
    </form><br>
    <a href=""><button>J\'ai oublié mon mot de passe </button></a>';
$contenu = ob_get_clean();
require 'vues/gabarit.php';
?>

