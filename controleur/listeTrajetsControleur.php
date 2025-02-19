<?php

$title="ecoride, liste des trajets";
$metadescription="Ceci est la description de la page";

//modele
$depart_secure=$arrivee_secure=$historique="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $depart_secure=htmlspecialchars($_POST["depart"]) ?? "";
    $arrivee_secure=htmlspecialchars($_POST["arrivee"]) ?? "";
    $filtre_secure=htmlspecialchars($_POST["filtre"]) ?? "";
    $prix_max=htmlspecialchars($_POST["prix_max"]) ?? "";
    $duree_max=htmlspecialchars($_POST["duree_max"]) ?? "";
}
require_once "model/liste_trajet.php";

require_once "view/header.php";
require_once "view/listeTrajets.php";
require_once "view/footer.php";
