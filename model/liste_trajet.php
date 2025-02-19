<?php

$output_trajet=" 
    <table>
        <thead>
            <tr>
                <th>conducteur</th>
                <th>voiture</th>
                <th>depart</th>
                <th>heure depart</th>
                <th>lieu de depart</th>
                <th>date arrive</th>
                <th>heure arrive</th>
                <th>lieu arrive</th>
                <th>etat</th>
                <th>place</th>
                <th>prix</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
";


if($depart_secure != ""){
    $sql="SELECT * FROM covoiturage WHERE nb_place>0 AND lieu_depart='$depart_secure' AND lieu_arrivee='$arrivee_secure'";
}elseif($historique != ""){
    $sql="SELECT * FROM covoiturage WHERE id_utilisateur = '$historique'";
}elseif($filtre_secure == "filtre"){
    $sql="SELECT * FROM covoiturage WHERE prix_personne < '$prix_max'";
}else{
    $sql="SELECT * FROM covoiturage WHERE nb_place>0" ;
}


$stmt=$pdo->query($sql);

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

    $sqlU="SELECT pseudo FROM utilisateur WHERE utilisateur_id = :id";
    $stmtU=$pdo->prepare($sqlU);
    $stmtU->bindParam(":id", $row["id_utilisateur"]);
    $stmtU->execute();
    $user=$stmtU->fetch();

    $sqlV="SELECT * FROM voiture WHERE id_utilisateur = :id";
    $stmtV=$pdo->prepare($sqlV);
    $stmtV->bindParam(":id", $row["id_utilisateur"]);
    $stmtV->execute();
    $voiture=$stmtV->fetch();

    $voiture_complet=$voiture["modele"]." (".$voiture["energie"].")";
    $voiture_complet=($voiture_complet == " ()" ? "/" : $voiture_complet);

    $etat= match ($row["statut"]) {
        "ec" => "<span class='green'> Disponible</span>",
        "complet" =>"<span class='red'> Complet</span>" 
    };

   

    

    $output_trajet .= "
        <tr>
            <td class='bold'>".$user["pseudo"]."</td>
            <td class='center'>".$voiture_complet."</td>
            <td class='center'>".convertDateToFR($row["date_depart"])."</td>
            <td class='center'>".$row["heure_depart"]."</td>
            <td class='capitalize'><a href='index.php?page=trajet&id=".$row["covoiturage_id"]."'>".$row["lieu_depart"]."</a></td>
            <td class='center'>".convertDateToFR($row["date_arrivee"])."</td>
            <td class='center'>".$row["heure_arrivee"]."</td>
            <td class='capitalize'>".$row["lieu_arrivee"]."</td>
            <td>".$etat."</td>
            <td class='center'>".$row["nb_place"]."</td>
            <td class='bold green text-right' >".$row["prix_personne"].",00 €</td>
            <td class='center'><a href='index.php?page=trajet&id=".$row["covoiturage_id"]."'>details</a>
        </tr>
    ";
}

$output_trajet .= "</tbody></table>";