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
    </header>

    <div id="contenu">
        <?= $contenu?>   <!-- Élément spécifique -->
    </div>

    <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.
        <?php
        session_start();
        if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['mail'])) {
            echo '<a href="profil.php"><button>Mon profil</button> ';
        }
        ?>
    </footer>

</body>
</html>
