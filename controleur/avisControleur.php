<?php

//redirection de non connection
if(!isset($_SESSION["user_id"]) OR empty($_SESSION["user_id"])){
    header("Location: index.php?page=login");
    exit;
}

$id_trajet_secure=htmlspecialchars($_GET["id_trajet"]);
if($id_trajet_secure != ""){
    $id_trajet_secure=intval($id_trajet_secure);
    require_once "model/getTrajet.php";
}

$error="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once "model/ajouterAvis.php";
}

$title="ecoride, avis";
$metadescription="Ceci est la description de la page";
$metarobot="<meta name='robots' content='noindex, follow'>";

require_once "view/header.php";
require_once "view/avis.php";
require_once "view/footer.php";
