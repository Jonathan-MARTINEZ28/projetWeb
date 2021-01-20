<?php
ob_start();
echo '
    <form action="modele/gestionbd.php" method="post">
        <label for="pseudo">Identifiant:</label><br>
        <input type="text" id="pseudo" name="pseudo"/><br>
        <label for="mail">E-mail</label><br>
        <input type="text" id="mail" name="mail"/><br>
        <input type="submit" value="Connection" name="action" id="recup" />
    </form><br>';
$contenu = ob_get_clean();
require 'View/gabarit.php';
?>