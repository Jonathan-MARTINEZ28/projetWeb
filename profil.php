<?php
ob_start();
session_start();
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) {
    echo 'Pseudo: ' . $_SESSION['pseudo'] . '<br>' .
        'Adresse mail: ' . $_SESSION['mail'] . '<br>';
}
echo ' <form action="modele/gestionbd.php" method="post">
        <label for="newpseudo">Identifiant:</label><br>
        <input type="text" id="newpseudo" name="newpseudo"/><br>
        <input type="submit" value="Connection" name="action" id="action" />
    </form><br>
    <form action="modele/gestionbd.php" method="post">
        <label for="newpseudo">Identifiant:</label><br>
        <input type="text" id="newpseudo" name="newpseudo"/><br>
        <input type="submit" value="Connection" name="action" id="action" />
    </form><br>
 <label for="newmail">Changer d\'adresse mail </label>
 <input type="text" id="newmail" name="newmail"/>
 <button action="modele/gestionbd.php" method="post" name="action" value="changemail">Confirmer</button><br>';

session_abort();
$contenu = ob_get_clean();
require 'gabarit.php'
?>