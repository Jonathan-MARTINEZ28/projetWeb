<?php
    ob_start();
    echo '
    <nav>
        <div id="leftnav">
            <figure id="logo1"><img src="View/logo_small.png" alt="icon1"></figure>
            <ul id="menu1">
                <li><a id="test1">Test1</a></li>
                <li><a id="test2">Test2</a></li>
            </ul>
        </div>
        <div id="rightnav"
            <div id="social">
                <a href="https://www.twitter.com">Twitter</a>
                <a href="https://www.facebook.com">Facebook</a>
            </div>
        </div>
    </nav>
    
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





