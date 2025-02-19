<?php

$title="ecoride, Administration";
$metadescription="Ceci est la description de la page";
$metarobot="<meta name='robots' content='noindex, follow'>";

if(isset($_GET["id_user"])){
    $id_user_secure=htmlspecialchars($_GET["id_user"]);
    $sql = "DELETE FROM utilisateur WHERE utilisateur_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id_user_secure]);
    header("Location: index.php?page=admin");
    exit();    
} 

require_once "model/adminUser.php";

require_once "view/header.php";
require_once "view/admin.php";
require_once "view/footer.php";
