<?php

$output_avis =" 
    <table>
        <thead>
            <tr>
                <th>avis_id</th>
                <th>Commentaire</th>
                <th>Note</th>
                <th>Statut</th>
                <th>Utilisateur</th>
                <th>Trajet</th>
                <th>Validé</th>
            </tr>
        </thead>
        <tbody>
";


$sql="SELECT * FROM avis";
$stmt=$pdo->query($sql);

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

    $sqlU="SELECT pseudo FROM utilisateur WHERE utilisateur_id = :id";
    $stmtU=$pdo->prepare($sqlU);
    $stmtU->bindParam(":id", $row["id_utilisateur"]);
    $stmtU->execute();
    $user=$stmtU->fetch();

    $sqlV="SELECT * FROM covoiturage WHERE covoiturage_id = :id";
    $stmtV=$pdo->prepare($sqlV);
    $stmtV->bindParam(":id", $row["id_covoiturage"]);
    $stmtV->execute();
    $trajet=$stmtV->fetch();

    $output_avis .= "
        <tr>
            <td class='bold'>".$row["avis_id"]."</td>
            <td class='center'>".$row["commentaire"]."</td>
            <td class='center'>".$row["note"]."</td>
            <td class='center'>".$row["statut"]."</td>
            <td class='capitalize'>".$user["pseudo"]."</td>
            <td class='center'>".$trajet["lieu_depart"]." → ".$trajet["lieu_arrivee"]."</td>
            <td class='center'><a onclick=\"alert('Etes vous de vouloir supprimer cet avis')\" href='index.php?page=validAvis&id_avis=".$row["avis_id"]."'>Modérer</a></td>
        </tr>
    ";
}

$output_avis .= "</tbody></table>";