<?php

$sql="SELECT * FROM covoiturage WHERE covoiturage_id= :id";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":id", $id_trajet_secure);
$stmt->execute();
$trajet=$stmt->fetch();

$nom_trajet="<span class='green capitalize'>".$trajet["lieu_depart"]."</span> → <span class='green capitalize'>".$trajet["lieu_arrivee"]."</span>"; 