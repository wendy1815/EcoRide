<?php

//redirection de non connection
if(!isset($_SESSION["user_id"]) OR empty($_SESSION["user_id"])){
    header("Location: index.php?page=login");
    exit;
}

$historique=$_SESSION["user_id"];
require_once "model/liste_trajet.php";

$title="ecoride, historique";
$metadescription="Ceci est la description de la page";
$metarobot="<meta name='robots' content='noindex, follow'>";

require_once "view/header.php";
require_once "view/historique.php";
require_once "view/footer.php";
