<?php

$sql="SELECT * FROM avis WHERE id_covoiturage= :id";
$stmtA=$pdo->prepare($sql);
$stmtA->bindParam(":id", $id_secure);
$stmtA->execute();

$output_avis = "";


while($avis=$stmtA->fetch(PDO::FETCH_ASSOC)){

    $sql="SELECT * FROM utilisateur WHERE utilisateur_id = :id";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(":id", $avis["id_utilisateur"]);
    $stmt->execute();
    $utilisateur=$stmt->fetch();

    if(empty($avis)){
        $output_avis = "<p>Il n'y a pas encore d'avis pour ce trajet.</p>";
    } else {
        $output_avis .= "<div class='avis'>";
        $output_avis .= "<h2>Note : ".$avis["note"]." / 5</h2>";
        $output_avis .= "<p>".$avis["commentaire"]."</p>";
        $output_avis .= "<p>Posté par ".$utilisateur["pseudo"]."</p>";
        $output_avis .= "</div>";
    }
}
