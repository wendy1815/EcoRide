<?php

$output_user=" 
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Téléphone</th>
                <th>Pseudo</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
";


$sql="SELECT * FROM utilisateur";
$stmt=$pdo->query($sql);

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

    $output_user .= "
        <tr>
            <td class='bold'>".$row["utilisateur_id"]."</td>
            <td class='center'>".$row["nom"]."</td>
            <td class='center'>".$row["prenom"]."</td>
            <td class='center'>".$row["email"]."</td>
            <td class='capitalize'>".$row["telephone"]."</td>
            <td class='center'>".$row["pseudo"]."</td>
            <td class='center'><a onclick=\"alert('Etes vous de vouloir supprimer cet utilisateur')\" href='index.php?page=admin&id_user=".$row["utilisateur_id"]."'>Modérer</a></td>
        </tr>
    ";
}

$output_user .= "</tbody></table>";