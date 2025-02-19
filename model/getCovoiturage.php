<?php

$sql="SELECT * FROM covoiturage WHERE covoiturage_id= :id";
$stmt=$pdo->prepare($sql);
$stmt->execute(["id" => $id_secure]);
$result=$stmt->fetch();

$sql_V="SELECT * FROM voiture WHERE id_utilisateur= :id";
$stmt_V=$pdo->prepare($sql_V);
$stmt_V->execute(["id" => $result["id_utilisateur"]]);
$result_V=$stmt_V->fetch();

$sql_U="SELECT * FROM utilisateur WHERE utilisateur_id= :id";
$stmt_U=$pdo->prepare($sql_U);
$stmt_U->execute(["id" => $result["id_utilisateur"]]);
$result_U=$stmt_U->fetch();
