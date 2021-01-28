<!doctype html>
<html lang="fr">
<head>
    <script src="https://kit.fontawesome.com/4549cae1c4.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <title>Vanestarre</title>
    <link rel="icon" href="../View/logo_small_icon_only_inverted.png" />
    <link rel="stylesheet" href="../View/style.css">

</head>

<body>
<header>

    <br>

    <figure id="logo2"><a href="../index.php"> <img src="../View/logo_small.png" alt="logo"> </a></figure>

    <br>


    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<a href="../View/Connection.php" id="connect">Se connecter</a>' . ' ' .
        '<a href="../View/Inscription.php" id="inscr">S\'inscrire</a><br>';
    }
    if (isset($_SESSION['id']) and isset($_SESSION['pseudo']) and isset($_SESSION['mail'])) {
        echo '<a href="../View/profil.php" id="profil">Mon profil</a>' . ' ' .
        '<a href="../controleur/déconnection.php" id="deconnect">Déconnection</a><br><br> ';
    }
    ?>

    <form method="POST">
        <label>Rerchercher un tag :</label>
        <input type="text" name="recherche" placeholder="Chercher">
        <button type="submit">Search!</button>
    </form>

</header>

<div id="contenu">
    <?= $contenu?>   <!-- Élément spécifique -->
</div>

<footer id="piedBlog">
    Blog réalisé avec PHP, HTML5 et CSS.
</footer>

</body>

</html>