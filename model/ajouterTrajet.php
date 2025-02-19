<?php



// Vérification des données POST
$date_depart_secure = isset($_POST["date_depart"]) ? htmlspecialchars($_POST["date_depart"]) : null;
$date_arrivee_secure = isset($_POST["date_arrivee"]) ? htmlspecialchars($_POST["date_arrivee"]) : null;
$heure_depart_secure = isset($_POST["heure_depart"]) ? htmlspecialchars($_POST["heure_depart"]) : null;
$heure_arrivee_secure = isset($_POST["heure_arrivee"]) ? htmlspecialchars($_POST["heure_arrivee"]) : null;
$lieu_depart_secure = isset($_POST["lieu_depart"]) ? htmlspecialchars($_POST["lieu_depart"]) : null;
$lieu_arrivee_secure = isset($_POST["lieu_arrivee"]) ? htmlspecialchars($_POST["lieu_arrivee"]) : null;
$nb_place_secure = isset($_POST["nb_place"]) ? (int) $_POST["nb_place"] : null;
$prix_secure = isset($_POST["prix"]) ? (float) $_POST["prix"] : null;

// Vérifications des données
if (empty($date_depart_secure) || empty($date_arrivee_secure) || empty($heure_depart_secure) || empty($heure_arrivee_secure) || 
    empty($lieu_depart_secure) || empty($lieu_arrivee_secure) || $nb_place_secure <= 0 || $prix_secure < 0) {
    $error = "Veuillez entrer des valeurs valides.";
}

if ($error == "") {

    $sql = "INSERT INTO covoiturage (date_depart, heure_depart, lieu_depart, date_arrivee, heure_arrivee, lieu_arrivee, statut, nb_place, prix_personne, id_utilisateur) 
            VALUES (:date_depart, :heure_depart, :lieu_depart, :date_arrivee, :heure_arrivee, :lieu_arrivee, :statut, :nb_place, :prix_personne, :id_utilisateur)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->execute([
        "date_depart" => $date_depart_secure,
        "heure_depart" => $heure_depart_secure,
        "lieu_depart" => $lieu_depart_secure,
        "date_arrivee" => $date_arrivee_secure,
        "heure_arrivee" => $heure_arrivee_secure,
        "lieu_arrivee" => $lieu_arrivee_secure,
        "statut" => "ec",
        "nb_place" => $nb_place_secure,
        "prix_personne" => $prix_secure,
        "id_utilisateur" =>  $_SESSION["user_id"]
    ]);
    
    header("Location: index.php?page=compte");
    exit;
}