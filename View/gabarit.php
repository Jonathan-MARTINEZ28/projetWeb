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

    nav {
        background: gray;
        height:50px;
        top:0;
        width: 100%;
        position: sticky;
        display: flex;
        justify-content: space-between;
        z-index: 1;
    }
    #leftnav {
        display: flex;
        flex-direction: row;
        margin-left: 3px;
    }

    #rightnav {
        display: flex;
        flex-direction: row-reverse;
        margin-top: 10px;
        margin-right: 3px;
    }

    #logo1  img:hover {zoom: 200%;}
    #logo1 img {width:50px;}

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
