<?php

//redirection de non connection
if(!isset($_SESSION["user_id"]) OR empty($_SESSION["user_id"])){
    header("Location: index.php?page=login");
    exit;
}

$message="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once "model/saveInfo.php";
}

require_once "model/getUserInfo.php";

$title="ecoride, informations";
$metadescription="Ceci est la description de la page";
$metarobot="<meta name='robots' content='noindex, follow'>";

require_once "view/header.php";
require_once "view/info.php";
require_once "view/footer.php";
