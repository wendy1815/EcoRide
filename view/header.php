<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <meta name="description" content="<?= $metadescription; ?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <?= $metarobot ?? ""; ?>
</head>
<body>

    <header id="header">
        <h1>
            <a href="index.php"><img alt="logo ecoride" src="img/logo.png">ecoride</a>
        </h1>
        <nav class="navbar">
            <button class="menu-toggle" id="menu-toggle">&#9776;</button>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="index.php?page=listeTrajets"><?= $svg_list; ?>Liste des trajets</a></li>
                <li><?php

                    if(isset($_SESSION["user_id"]) && !empty($_SESSION["user_id"])){
                        echo '<a href="index.php?page=compte"> '.$svg_user. 'Mon compte</a>';
                    } else {
                        echo '<a href="index.php?page=login">'. $svg_user. 'Connexion</a>';
                    }
                    
                ?></li>
                <li><a href="index.php?page=contact"><?= $svg_contact; ?>Contact</a></li>
            </ul>
        </nav>
        <script src="js/hamburger.js"></script>
    </header>
    <img alt="covoiturage"  src="img/bg2.jpg" id="bg">

  