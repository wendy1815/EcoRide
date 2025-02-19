<?php

//redirection de non connection
if(!isset($_SESSION["user_id"]) OR empty($_SESSION["user_id"])){
    header("Location: index.php?page=login");
    exit;
}

$error="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once "model/ajouterTrajet.php";
}

$title="ecoride, mon compte";
$metadescription="Ceci est la description de la page";
$metarobot="<meta name='robots' content='noindex, follow'>";

require_once "view/header.php";
require_once "view/ajoutTrajet.php";
require_once "view/footer.php";
