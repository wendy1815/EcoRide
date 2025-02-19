<?php

//recuperation et securisation des variable
$nom_secure=htmlspecialchars($_POST["nom"]);
$prenom_secure=htmlspecialchars($_POST["prenom"]);
$email_secure=htmlspecialchars($_POST["email"]);
$telephone_secure=htmlspecialchars($_POST["telephone"]);
$adresse_secure=htmlspecialchars($_POST["adresse"]);
$date_naissance_secure=htmlspecialchars($_POST["d2n"]);
$photo_secure=htmlspecialchars($_POST["photo"]);
$pseudo_secure=htmlspecialchars($_POST["pseudo"]);

$modele_secure=htmlspecialchars($_POST["modele"]);
$immatriculation_secure=htmlspecialchars($_POST["immatriculation"]);
$energie_secure=htmlspecialchars($_POST["energie"]);
$couleur_secure=htmlspecialchars($_POST["couleur"]);
$date_premiere_immatriculation_secure=htmlspecialchars($_POST["date_premiere_immatriculation"]);

//validation des variable
if(
    $nom_secure=="" OR 
    $prenom_secure=="" OR 
    $telephone_secure=="" OR 
    $adresse_secure=="" OR 
    $date_naissance_secure=="" OR 
    $pseudo_secure=="" OR  
    $modele_secure=="" OR 
    $immatriculation_secure=="" OR 
    $energie_secure=="" OR
    $couleur_secure=="" OR 
    $date_premiere_immatriculation_secure=="" OR 
    !filter_var($email_secure, FILTER_VALIDATE_EMAIL) 
){
    $message="Entrer des données valides";
}

if($_FILES["photo"]["error"] == UPLOAD_ERR_OK){
    $image=file_get_contents($_FILES["photo"]["tmp_name"]);
    $sql_img="UPDATE utilisateur SET photo = :photo WHERE utilisateur_id = :id";
    $stmt_img=$pdo->prepare($sql_img);
    $stmt_img->bindParam(":photo", $image, PDO::PARAM_LOB);
    $stmt_img->bindParam(":id", $_SESSION["user_id"]);
    $stmt_img->execute();

}


//enregistrement la bdd utilisateur
$sql="UPDATE utilisateur SET nom = :nom, prenom = :prenom, telephone = :telephone, date_naissance = :date_naissance, pseudo = :pseudo WHERE utilisateur_id = :id";
$stmt=$pdo->prepare($sql);
$stmt->execute([
    ":nom" => $nom_secure,
    ":prenom" => $prenom_secure,
    ":telephone" => $telephone_secure,
    ":date_naissance" => $date_naissance_secure,
    ":pseudo" => $pseudo_secure,
    ":id" => $_SESSION["user_id"]
]);

//enregistrement dans la bdd voiture
$sql_voiture="UPDATE voiture SET modele = :modele, immatriculation = :immatriculation, energie = :energie, couleur = :couleur, date_premiere_immatriculation = :date_premiere_immatriculation WHERE id_utilisateur = :id";
$stmt_voiture=$pdo->prepare($sql_voiture);
$stmt_voiture->execute([
    ":modele" => $modele_secure, 
    ":immatriculation" => $immatriculation_secure,
    ":energie" => $energie_secure,
    ":couleur" => $couleur_secure,
    ":date_premiere_immatriculation" => $date_premiere_immatriculation_secure,
    ":id" => $_SESSION["user_id"]
]);