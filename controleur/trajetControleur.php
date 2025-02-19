<?php

$id_secure=filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if($id_secure == false OR $id_secure == null){
    header("Location: index.php");
    exit();
}

require_once "model/getCovoiturage.php";
require_once "model/getAvisTrajet.php";

if(empty($result)){
    header("Location: index.php?page=listeTrajets");
    exit();   
}

$title="ecoride, ". $result["lieu_depart"]. " - ". $result["lieu_arrivee"];
$metadescription="Ceci est la description de la page";


require_once "view/header.php";
require_once "view/trajet.php";
require_once "view/footer.php";
