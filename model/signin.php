<?php

$mail_secure=htmlspecialchars($_POST["mail"]);
$password_secure=htmlspecialchars($_POST["password"]);
$confirm_secure=htmlspecialchars($_POST["confirm"]);

if(!filter_var($mail_secure, FILTER_VALIDATE_EMAIL)){
    $error="entrée un e-mail valide<br>";
}

if(strlen($password_secure) > 20 OR $password_secure != $confirm_secure ){
    $error.="entrée un mot de passe valide";
}

if($error == ""){
    $sql="INSERT INTO utilisateur (email, password) VALUES (:email, :password)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([
        "email" => $mail_secure,
        "password" => $password_secure
    ]);
    $lastId=$pdo->lastInsertId();
    $_SESSION["user_id"]=$lastId;
    header("Location: Index.php?page=compte");
    exit;
}