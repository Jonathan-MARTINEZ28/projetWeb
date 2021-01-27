<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Vanestarre</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    @font-face {
        font-family: "hi";
        src: url(View/Original_Quality_DEMO.otf);
    }
    nav {
        background: #111111;
        height:50px;
        top:0;
        width: 100%;
        position: sticky;
        display: flex;
        justify-content: space-between;
        z-index: 1;
    }
    #menu1 {
        margin-top: 5px;
        display: flex;
        flex-direction: row;
    }

    #menu1 li {
        list-style: none;
        margin-top: 5px;
        padding-left: 10px;
    }
    #menu1 li a {
        font-size:1.4em;
        color: #e9ebee;
        text-decoration: none;
        padding-left: 5px;
        font-family: hi;
    }
    #menu2 {
        display: none;
        border-radius: 10px;
        background: #111111;
        padding-right: 20px;
        position: absolute;
    }
    #menu1 li:hover #menu2 {display: block;}

    #menu2 li {padding-bottom: 10px;}

    #menu1 li a:not(#hm):hover {color:#ff5c62;}

    #icn,#social {
        display: flex;
        align-items: center;
    }


    #leftnav {
        display: flex;
        flex-direction: row;
        margin-left: 3px;
    }

    #azar:hover {color: #ff5c62;}
    #azar {
        border: none;
        outline: none;
        background: none;
        font-family: hi;
        font-size: 1.4em;
        color: #e9ebee;
        cursor: pointer;
    }

    #logo1  img:hover {zoom: 107%;}
    #logo1 img {width:48px;}


    #hm:hover {border: 2px solid #ff5c62;}
    #hm {
        border: 2px dashed #ff5c62;
        padding-right: 3px;
    }

    #logo2 {text-align: center;}

    #logo2 img {width:300px;}

    .b #hm:hover {border: 2px solid #4f3ab7;}
    #hm:hover {border: 2px solid #ff5c62;}
    .b #hm {border: 2px dashed #4f3ab7;}
    #hm {
        border: 2px dashed #ff5c62;
        padding-right: 3px;
    }

</style>

<body>
<header>
    <nav>
        <div id="leftnav">
            <figure id="logo1"><img src="../View/logo_small_icon_only_inverted.png" alt="icon1"></figure>
            <ul id="menu1">
                <li><a id="hm" href="../index.php">Home</a></li>
                <li><a href="MET CE QUE TU VEUX">XXX</a></li>
                <li><a href="Opinion.html">YYY</a></li>
                <li><button id="azar">Others</button>
                    <ul id="menu2">
                        <li><a href="CV.html">ZZZ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <br>

    <figure id="logo2"><a href="../index.php"> <img src="../View/logo_small.png" alt="logo"> </a></figure>

    <br>


    <?php
    session_start();
    if (!isset($_SESSION['id'])) {
        echo '<a href="View/Connection.php"><button>Se connecter</button></a><br>
        <a href="View/Inscription.php"><button>S\'inscrire</button></a><br>';
    }
    if (isset($_SESSION['id']) and isset($_SESSION['pseudo']) and isset($_SESSION['mail'])) {
        echo '<a href="View/profil.php"><button>Mon profil</button></a><br>
        <a href="../controleur/déconnection.php"><button>déconnection</button></a><br> ';
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
