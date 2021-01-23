<?php
ob_start();
session_start();
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) {
    echo 'Pseudo: ' . $_SESSION['pseudo'] . '<br>' .
        'Adresse mail: ' . $_SESSION['mail'];
}
echo ' <input type="text" id="newpseudo" name="newpseudo"/><br>';
session_abort();
$contenu = ob_get_clean();
require 'vues/gabarit.php'
?>