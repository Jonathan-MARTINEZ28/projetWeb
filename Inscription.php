<?php
include 'utils.inc.php';
include 'modele/gestionbd.php';
start_page('titre');
?>

<?php
ob_start();
echo '
    <form action="data-processing.php" method="post">
        <label for="id">Identifiant:</label><br>
        <input type="text" id="id" name="id"/><br>
        <a>Civilité</a><br>
        <input type="radio" id="H" name="Civilité" value="H"/>
        <label for="H">Homme</label><br>
        <input type="radio" id="F" name="Civilité" value="F"/>
        <label for="F">Femme</label><br>
        <input type="radio" id="O" name="Civilité" value="O"/>
        <label for="O">Autre</label><br>
        <label for="mail">E-mail</label><br>
        <input type="text" id="mail" name="mail"/><br>
        <label for="pass">Mot de passe</label><br>
        <input type="password" id="pass" name="pass"/><br>
        <label for="pass2">Vérification du Mot de passe</label><br>
        <input type="password" id="pass2" name="pass2"/><br>
        <label for="phone">n° de téléphone</label><br>
        <input type="text" id="phone" name="phone"/><br>
        <label for="pays">Pays</label><br>
        <select name="pays" id="pays">
            <option value="">--Choisissez un pays--</option>
            <option value="fr">France</option>
            <option value="jp">Japon</option>
            <option value="us">Etats-Unis</option>
        </select><br>
        <input type="checkbox" id="cgu" name="cgu" value="1">
        <label for="cgu">J\'accepte les conditions générales d\'utilisation</label><br>
        <input type="submit" value="Inscription" name="action" id="action" />
    </form>
    <a href="Connection.php">J\'ai déjà un compte</a><br>'

    add_user();
?>

<?php
end_page();
?>