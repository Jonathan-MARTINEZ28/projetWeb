<?php
ob_start();
session_start();
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) {
    echo 'Pseudo: ' . $_SESSION['pseudo'] . '<br>' .
        'Adresse mail: ' . $_SESSION['mail'] . '<br>';
}
echo ' <form action="gestionbd.php" method="post">
        <label for="newpseudo">Changer de pseudo </label><br>
        <input type="text" id="newpseudo" name="newpseudo"/>
        <input type="submit" value="changer de pseudo" name="action" id="action" />
    </form><br>
    <form action="gestionbd.php" method="post">
        <label for="newpseudo">changer d\'adresse mail</label><br>
        <input type="text" id="newmail" name="newmail"/>
        <input type="submit" value="changer d\'adresse mail" name="action" id="action" />
    </form><br>';

session_abort();
$contenu = ob_get_clean();
require 'gabarit.php'
?>