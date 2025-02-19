<?php

$sql="SELECT * FROM utilisateur WHERE utilisateur_id = :id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":id", $_SESSION["user_id"]);
$stmt->execute();
$row=$stmt->fetch();

$sql="SELECT * FROM voiture WHERE id_utilisateur= :id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":id", $_SESSION["user_id"]);
$stmt->execute();
$row_voiture=$stmt->fetch();

if($row["photo"]!=""){
    //header("Content-Type: jpg");
    //echo $row["photo"];
}