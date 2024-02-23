<?php
require "./configuration.php";
require "./classes/reservation.php";
require "./classes/Database.php";
require "./classes/User.php";

$Database = new Database();

if( isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["telephone"]) && isset($_POST["adressePostale"])){

    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);

    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $email = htmlspecialchars($_POST["email"]);
    }else{
        echo "l'email n'est pas valide";
    }

    $telephone = $_POST["telephone"];
    if(ctype_digit($telephone)){
        $telephone = intval($telephone);
    }else{
        echo "Le numéro de téléphone n'est pas valide";
    }

    $adresse = htmlspecialchars($_POST["adressePostale"]);
}
?>


