<?php

//redirection de non connection
if(!isset($_SESSION["user_id"]) OR empty($_SESSION["user_id"])){
    header("Location: index.php?page=login");
    exit;
}

require_once "model/getRole.php";

$title="ecoride, mon compte";
$metadescription="Ceci est la description de la page";
$metarobot="<meta name='robots' content='noindex, follow'>";

require_once "view/header.php";
require_once "view/compte.php";
require_once "view/footer.php";

