<?php


$sql="SELECT * FROM role WHERE id_utilisateur= :id";
$stmt=$pdo->prepare($sql);
$stmt->execute(["id" => $_SESSION["user_id"]]);
$result=$stmt->fetch();

$role=$result["libelle"] ?? "";

