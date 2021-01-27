<?php
require_once '../Modele/gestionBD.php';

var_dump($_POST);
//$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
$recherche = $_POST['recherche'];
$dbLien = getBD();
$query = "SELECT contenu FROM messages WHERE tag LIKE '$recherche' ";
/*while ( $r = mysqli_fetch_array($query)){
    echo 'Résultat de la recherche: '.$r['tag'].' <br/>';

}*/
$dbResultat = getRequest($dbLien,$query);
/*$dbRow = mysqli_fetch_array($dbResultat);
echo $dbRow;*/
while ($row=mysqli_fetch_array($dbResultat)){
    echo $row['contenu'];
}
