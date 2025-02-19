<?php

$error="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once "model/contact.php";
}

$title="ecoride, formulaire de contact";
$metadescription="Ceci est la description de la page";

require_once "view/header.php";
require_once "view/contact.php";
require_once "view/footer.php";
