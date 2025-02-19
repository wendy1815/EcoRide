<?php

if(empty($_POST["nom"]) OR empty($_POST["mail"]) OR empty($_POST["message"])){
    $error="veuillez remplir tous les champs du formulaire";
}else{
    $error=0;
}