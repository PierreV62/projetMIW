<?php


$strCherche = $_GET['blabla'];
$recherche = $_GET['blabla'] . "%";
//var_dump($_GET);

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=villes_france;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $query = $bdd->query("Select DISTINCT ville_nom, ville_code_commune, ville_longitude_deg, ville_latitude_deg from villes_france_free WHERE ville_nom LIKE '$recherche' LIMIT 20 ");
    $villes = array();
    while ($ville = $query->fetch())
        array_push($villes, array("nom" => $ville["ville_nom"],
            "insee" => $ville["ville_code_commune"],
            "lon" => $ville["ville_longitude_deg"],
            "lat" => $ville["ville_latitude_deg"]));
    echo(json_encode($villes));



//try {
//    $bdd = new PDO('mysql:host=localhost;dbname=villes_france;charset=utf8', 'root', '');
//}
//catch (Exception $e) {
//    die('Erreur : ' . $e->getMessage());
//}
//$query = $bdd->query("Select * from villes_france_free WHERE ville_nom LIKE ");
//$villes = array();
//while ($ville = $query->fetch())
//    array_push($villes, array("nom" => $ville["ville_nom"],
//        "insee" => $ville["ville_code_commune"],
//        "lon" => $ville["ville_longitude_deg"],
//        "lat" => $ville["ville_latitude_deg"]));
//echo(json_encode($villes));

?>