<?php

$mail_secure=htmlspecialchars($_POST["mail"]);
$password_secure=htmlspecialchars($_POST["password"]);

if(!filter_var($mail_secure, FILTER_VALIDATE_EMAIL)){
    $error_connnexion="entrée un e-mail valide<br>";
}

if($error_connexion == ""){
    $stmt=$pdo->prepare("SELECT utilisateur_id, email, password FROM utilisateur WHERE email = ?");
    $stmt->execute([$mail_secure]);
    $user=$stmt->fetch();


    //echo "bemail : ".$user["email"]." - eemail : ".$password_secure;

    if($user["password"] == $password_secure){
        $_SESSION["user_id"] = $user["utilisateur_id"];
        header("Location: index.php?page=compte");
    }else {
        $error_connexion="mail ou password invalide";
    }

}