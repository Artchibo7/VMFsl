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







// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Récupération des données du formulaire
//     $nom = $_POST["nom"];
//     $prenom = $_POST["prenom"];
//     $email = $_POST["email"];
//     $telephone = $_POST["telephone"];
//     $adressePostale = $_POST["adressePostale"];
//     $nombrePlaces = $_POST["nombrePlaces"];

//     $tarifReduit = isset($_POST["tarifReduit"]) ? "Oui" : "Non"; // Si la case est cochée, renvoie "Oui", sinon "Non"

//     if (isset($_POST['nbJourReduit'])) {
//         // Récupérer la valeur sélectionnée
//         $nombreJourReduit = $_POST['nbJourReduit'];
        
//         // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
//         if ($nombreJourReduit == "pass1jourreduit") {
//             $choixNombreJourReduit = "pass1jourReduit";
//         } if ($nombreJourReduit == "pass2joursreduit") {
//             $choixNombreJourReduit = "pass2joursReduit";
//         } if ($nombreJourReduit == "pass3joursreduit") {
//             $choixNombreJourReduit = "pass3joursReduit";
//         }
//     }if (!isset($_POST['nbJourReduit'])) {
//         $choixNombreJourReduit = "null";
//     }



//     if (isset($_POST['nbJour'])) {
//         // Récupérer la valeur sélectionnée
//         $nombreJour = $_POST['nbJour'];
        
//         // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
//         if ($nombreJour == "pass1jour") {
//             $choixNombreJour = "pass1jour";
//         } if ($nombreJour == "pass2jours") {
//             $choixNombreJour = "pass2jours";
//         } if ($nombreJour == "pass3jours") {
//             $choixNombreJour = "pass3jours";
//         }
//     }if (!isset($_POST['nbJour'])) {
//         $choixNombreJour = "null";
//     }

   
//     if (isset($_POST['datePass1jour'])) {
//         // Récupérer la valeur sélectionnée
//         $datePass1jour = $_POST['datePass1jour'];
        
//         // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
//         if ($datePass1jour == "choixJour1") {
//             $choixPass1jour = "Jour1";
//         } if ($datePass1jour == "choixJour2") {
//             $choixPass1jour = "Jour2";
//         } if ($datePass1jour == "choixJour3") {
//             $choixPass1jour = "Jour3";
//         }
//     }if (!isset($_POST['datePass1jour'])) {
//         $choixPass1jour = "null";
//     }

    
//     if (isset($_POST['datePass2jours'])) {
//         // Récupérer la valeur sélectionnée
//         $passSelection = $_POST['datePass2jours'];
        
//         // Analyser la valeur sélectionnée pour obtenir les informations nécessaires
//         if ($passSelection == "choixJour12") {
//             $choixPass2Jours = "Jour12";
            
//         } if ($passSelection == "choixJour23") {
//             $choixPass2Jours = "Jour23";
//         }
//     }if (!isset($_POST['datePass2jours'])) {
//         $choixPass2Jours = "null";
//     }


//     $tenteNuit1 = isset($_POST["tenteNuit1"]) ? "Oui" : "Non";
//     $tenteNuit2 = isset($_POST["tenteNuit2"]) ? "Oui" : "Non";
//     $tenteNuit3 = isset($_POST["tenteNuit3"]) ? "Oui" : "Non";
//     $tente3Nuits = isset($_POST["tente3Nuits"]) ? "Oui" : "Non";

//     $vanNuit1 = isset($_POST["vanNuit1"]) ? "vanNuit1" : "Non";
//     $vanNuit2 = isset($_POST["vanNuit2"]) ? "vanNuit2" : "Non";
//     $vanNuit3 = isset($_POST["vanNuit3"]) ? "vanNuit3" : "Non";
//     $van3Nuits = isset($_POST["van3Nuits"]) ? "van3Nuits" : "Non";

//     if (isset($_POST['enfants'])) {
        
//         $enfants = $_POST['enfants'];
        
//         if ($enfants == "enfantsOui") {
//             $enfant = "Oui";
            
//         } if ($enfants == "enfantsNon") {
//             $enfant = "Non";
//         }
//     }

//     $nombreCasquesEnfants = $_POST["nombreCasquesEnfants"];

//     $NombreLugesEte = $_POST["NombreLugesEte"];


//     $ligne = "$nom,$prenom,$email,$telephone,$adressePostale,$nombrePlaces,$tarifReduit,$choixNombreJourReduit,$choixNombreJour,$choixPass1jour,$choixPass2Jours,$tenteNuit1,$tenteNuit2,$tenteNuit3,$tente3Nuits,$vanNuit1,$vanNuit2,$vanNuit3,$van3Nuits,$enfant,$nombreCasquesEnfants,$NombreLugesEte\n";
//     file_put_contents("reservations.csv", $ligne, FILE_APPEND);

//     // Réponse à l'utilisateur
//     echo "Merci pour votre réservation !";
    
// } else {
//     // Si la méthode HTTP n'est pas POST, renvoyer une erreur
//     http_response_code(405); // Méthode non autorisée
//     echo "Méthode non autorisée";
// }
