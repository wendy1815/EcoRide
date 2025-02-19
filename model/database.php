<?php

$host = 'localhost';     // Hôte de la base de données
$dbname = 'ecoride'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur
$password = 'root'; // Mot de passe

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // echo "Connexion réussie à la base de données !";
} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
