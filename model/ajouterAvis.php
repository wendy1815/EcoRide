<?php

$commentaire_secure=htmlspecialchars($_POST["commentaire"]);
$note_secure=htmlspecialchars($_POST["note"]);
$statut_secure=htmlspecialchars($_POST["statut"]);
$id_trajet_secure=htmlspecialchars($_POST["id_trajet"]);

if($commentaire_secure =="" OR $note_secure=="" OR $statut_secure=="" OR $id_trajet_secure==""){
    $error="Entrez des données valides";
}

if ($error == "") {

    $sql = "INSERT INTO avis (commentaire, note, statut, id_utilisateur, id_covoiturage) 
            VALUES (:commentaire, :note, :statut, :id_utilisateur, :id_covoiturage)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->execute([
        "commentaire" => $commentaire_secure,
        "note" => $note_secure,
        "statut" => $statut_secure,
        "id_utilisateur" => $_SESSION["user_id"],
        "id_covoiturage"=>$id_trajet_secure
    ]);
    
    header("Location: index.php?page=compte");
    exit;
}