<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Vanestarre</title>
</head>
<style>
    body {
        background-color: violet;
    }
</style>

<body>
    <header>
        <a href="index.php"> <img src="View/logo_small.png" alt="logo"> </a><br>
        <?php
        session_start();
        if (!isset($_SESSION['id'])){
            echo'<a href="Connection.php"><button>Se connecter</button></a><br>
            <a href="Inscription.php"><button>S\'inscrire</button></a><br>';
        }
        if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['mail'])) {
            echo '<a href="profil.php"><button>Mon profil</button></a><br>
            <a href="déconnection.php"><button>déconnection</button></a><br> ';
        }
        ?>
    </header>

    <div id="contenu">
        <?= $contenu?>   <!-- Élément spécifique -->
    </div>

    <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.
    </footer>

</body>
</html>
