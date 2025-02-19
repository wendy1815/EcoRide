<?php

$title="ecoride, Validation des avis (employé)";
$metadescription="Ceci est la description de la page";
$metarobot="<meta name='robots' content='noindex, follow'>";

if(isset($_GET["id_avis"])){
    $id_avis_secure=htmlspecialchars($_GET["id_avis"]);
    $sql = "DELETE FROM avis WHERE avis_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id_avis_secure]);
    header("Location: index.php?page=validAvis");
    exit();    
}   


require_once "model/getAvis.php";

require_once "view/header.php";
require_once "view/validAvis.php";
require_once "view/footer.php";
