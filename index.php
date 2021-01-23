<?php
    ob_start();
    echo '
    <a href="Connection.php"><button>Se connecter</button></a><br>
    <a href="Inscription.php"><button>S\'inscrire</button></a><br>
    <a href="déconnection.php"><button>déconnection</button></a><br>
    <h3>message</h3><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><br>
    <select name="pays" id="pays">
            <option value=""></option>
            <option value="fr">love</option>
            <option value="jp">cute</option>
            <option value="us">trop stylé</option>
            <option value="us">swag</option>
        </select><br>
    ';

$contenu = ob_get_clean();
    require 'View/gabarit.php';
?>





