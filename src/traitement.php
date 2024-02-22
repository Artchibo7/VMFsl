<?php
require "./configuration.php"
require "./classes/Database.php";
require "/classes/User.php";

$Database = new Database();

if( isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["mail"]) && isset($_POST["telephone"]) && isset($_POST["adresse"])){

    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);

    if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
        $mail = htmlspecialchars($_POST["mail"]);
    }else{
        // coordonees("Location: ../index.php?erreur=".ERREUR_EMAIL);
        echo "l'email n'est pas valide";
    }

    $telephone = ($_POST["telephone"]);
    if(ctype_digit($telephone)){
        $telephone = intval($telephone);
    }else{
        echo "Le numéro de téléphone n'est pas valide";
    }
    $adresse = htmlspecialchars($_POST["adresse"]);

}