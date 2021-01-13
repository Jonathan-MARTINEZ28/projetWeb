<?php
    include 'utils.inc.php';
    start_page('VANESTARRE');
?>

<style>
    body {
        background-color: violet;
    }
</style>

<?php
    echo '<img src="logo_large.png" alt="logo">
    <a href="Connection.php">Se connecter</a><br>
    <a href="Inscription.php">S\'inscrire</a><br>
    <h3>message</h3><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><br>
    <select name="pays" id="pays">
            <option value=""></option>
            <option value="fr">love</option>
            <option value="jp">cute</option>
            <option value="us">trop stylé</option>
            <option value="us">swag</option>
        </select><br>
    '
?>



<?php
end_page();
?>

