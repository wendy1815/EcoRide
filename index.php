<?php

session_start();


// deconnexion
if(isset($_GET["deconnexion"]) && $_GET["deconnexion"]== "oui"){
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}
//library
require_once("model/svg.php");
require_once("model/database.php");
require_once("model/function.php");

// routage
$pageSecure = $_GET["page"] ?? "accueil";
$pageSecure = htmlentities(htmlspecialchars($pageSecure));

$controleurPath = "controleur/" . $pageSecure . "Controleur.php";

if(!is_file($controleurPath)) {
    $controleurPath = "controleur/accueilControleur.php";
}

require_once $controleurPath;

//fermeture de la BDD
$pdo=null;