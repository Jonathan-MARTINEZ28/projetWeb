<?php
ob_start();
session_start();
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo'])) {
    echo 'Pseudo: ' . $_SESSION['pseudo'] . '<br>' .
        'Adresse mail: ' . $_SESSION['mail'];
}

//changement de pseudo
echo ' <form action="../Modele/gestionUser.php" method="post">
        <label for="newpseudo">Changer de pseudo </label><br>
        <input type="text" id="newpseudo" name="newpseudo" required/>
        <input type="submit" value="changer de pseudo" name="action"/>
    </form><br>
    
    <!-- changement adresse mail -->
    <form action="../Modele/gestionUser.php" method="post">
        <label for="newpseudo">changer d\'adresse mail</label><br>
        <input type="text" id="newmail" name="newmail" required/>
        <input type="submit" value="changer d\'adresse mail" name="action"/>
    </form><br>';

if ($_SESSION['id'] == 1 ){
    echo '<a href="../View/interfaceAdmin.php" id="admin">administration du site</a>';
}

session_abort();
$contenu = ob_get_clean();
require 'gabarit.php'
?>