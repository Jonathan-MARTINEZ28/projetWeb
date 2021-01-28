<?php

ob_start();

   echo ' Réglage limite minimale et maximale paramétrables
    <form action="../controleur/controlleur_set_n.php" method="post">
        <input type="number" name="n_min" placeholder="n-min"/>
        <input type="number" name="n_max" placeholder="n-max"/>
        <input type="submit" name="rec_n" value="Enregistrer">
    </form><br>

    <form action="../controleur/controlleur_message.php" method="post">
        <label for="message">écrire un message</label><br>
        <input type="text" name="message" id="message" placeholder="Message..."/>
        <input type="text" name="tag" id="tag" placeholder="tag..."/>
        <input type="submit" name="envoyer" id ="envoyer" value="Envoyer"/>
    </form>';

$contenu = ob_get_clean();
require '../View/gabarit.php';
?>