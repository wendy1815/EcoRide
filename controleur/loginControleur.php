<?php

$error=$error_connexion="";

if(isset($_POST["type"])){

    if($_POST["type"] == "connexion"){
        require_once "model/login.php";
    }
    elseif($_POST["type"] == "inscription"){
        require_once "model/signin.php";
    }

}


$title="ecoride, connexion, inscription";
$metadescription="Ceci est la description de la page";
$metarobot="<meta name='robots' content='noindex, follow'>";

require_once "view/header.php";
require_once "view/login.php";
require_once "view/footer.php";
