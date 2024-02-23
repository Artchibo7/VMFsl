<?php
include "./includes/header.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de réservation Music Vercors Festival</title>

  <link rel="stylesheet" href="./assets/style.css">
  <link rel="stylesheet" href="./assets/administrateur.css">
  <link rel="stylesheet" href="./assets/headfoot.css">
  <script src="./assets/script.js" defer></script>
  <script src="./assets/admin.js" defer></script>
</head>
<body>
  <form action="./src/traitement.php" id="inscription" method="POST">
    <fieldset id="reservation">
      <legend>Réservation</legend>
      <h3>Nombre de réservation(s) :</h3>
      <input type="number" name="nombrePlaces" id="NombrePlaces" required min="1" required>
      <h3>Réservation(s) en tarif réduit</h3>
      <input type="checkbox" name="tarifReduit" id="tarifReduit" onclick="afficherMasquerTarifsReduits()">
      <label for="tarifReduit">Ma réservation sera en tarif réduit</label>

      <h3>Choisissez votre formule :</h3>
        <div id = "tarifsNormaux">
      <input type="checkbox" name="pass1jour" id="pass1jour" onclick="choixDate1jour()">
      <label for="pass1jour">Pass 1 jour : 40€</label>

      <!-- Si case cochée, afficher le choix du jour -->
      <section id="pass1jourDate" style="display: none;">
        <input type="checkbox" name="choixJour1" id="choixJour1">
        <label for="choixJour1">Pass pour la journée du 01/07</label>
        <input type="checkbox" name="choixJour2" id="choixJour2">
        <label for="choixJour2">Pass pour la journée du 02/07</label>
        <input type="checkbox" name="choixJour3" id="choixJour3">
        <label for="choixJour3">Pass pour la journée du 03/07</label>
      </section>

      <input type="checkbox" name="pass2jours" id="pass2jours" onclick="choixDate2jours()">
      <label for="pass2jours">Pass 2 jours : 70€</label>

      <!-- Si case cochée, afficher le choix des jours -->
      <section id="pass2joursDate" style="display: none;">
        <input type="checkbox" name="choixJour12" id="choixJour12">
        <label for="choixJour12">Pass pour deux journées du 01/07 au 02/07</label>
        <input type="checkbox" name="choixJour23" id="choixJour23">
        <label for="choixJour23">Pass pour deux journées du 02/07 au 03/07</label>
      </section>

      <input type="checkbox" name="pass3jours" id="pass3jours">
      <label for="pass3jours">Pass 3 jours : 100€</label>
</div>

      <!-- tarifs réduits : à n'afficher que si tarif réduit est sélectionné -->
      <section class="tarifsReduits" id="tarifsReduits" style="display: none;" >
      <input type="checkbox" name="pass1jourreduit" id="pass1jourreduit" onclick="choixDate1jourReduit()">
      <label for="pass1jourreduit">Pass 1 jour : 25€</label>
      <input type="checkbox" name="pass2joursreduit" id="pass2joursreduit">
      <label for="pass2joursreduit">Pass 2 jours : 50€</label>

      <section id="pass2joursDateReduit" style="display: none;">
        <input type="checkbox" name="choixJour12reduit" id="choixJour12reduit">
        <label for="choixJour12reduit">Pass pour deux journées du 01/07 au 02/07</label>
        <input type="checkbox" name="choixJour23reduit" id="choixJour23reduit">
        <label for="choixJour23reduit">Pass pour deux journées du 02/07 au 03/07</label>
      </section>

      <input type="checkbox" name="pass3joursreduit" id="pass3joursreduit">
      <label for="pass3joursreduit">Pass 3 jours : 65€</label>
     </section>

      <!-- FACULTATIF : ajouter un pass groupe (5 adultes : 150€ / jour) uniquement pass 1 jour -->
      <div >
        <button onclick="verifierChamps()" class="bouton "id="btnSuivant1">Suivant</button>
      </div>
      
    </fieldset>
    <fieldset id="options">
      <legend>Options</legend>
      <h3>Réserver un emplacement de tente : </h3>
      <input type="checkbox" id="tenteNuit1" name="tenteNuit1">
      <label for="tenteNuit1">Pour la nuit du 01/07 (5€)</label>
      <input type="checkbox" id="tenteNuit2" name="tenteNuit2">
      <label for="tenteNuit2">Pour la nuit du 02/07 (5€)</label>
      <input type="checkbox" id="tenteNuit3" name="tenteNuit3">
      <label for="tenteNuit3">Pour la nuit du 03/07 (5€)</label>
      <input type="checkbox" id="tente3Nuits" name="tente3Nuits">
      <label for="tente3Nuits">Pour les 3 nuits (12€)</label>

      <h3>Réserver un emplacement de camion aménagé : </h3>
      <input type="checkbox" id="vanNuit1" name="vanNuit1">
      <label for="vanNuit1">Pour la nuit du 01/07 (5€)</label>
      <input type="checkbox" id="vanNuit2" name="vanNuit2">
      <label for="vanNuit2">Pour la nuit du 02/07 (5€)</label>
      <input type="checkbox" id="vanNuit3" name="vanNuit3">
      <label for="vanNuit3">Pour la nuit du 03/07 (5€)</label>
      <input type="checkbox" id="van3Nuits" name="van3Nuits">
      <label for="van3Nuits">Pour les 3 nuits (12€)</label>

      <h3>Venez-vous avec des enfants ?</h3>
      <input type="checkbox" name="enfantsOui" id="enfantsOui"onclick="afficherCasques()"><label for="enfantsOui"  >Oui</label> 
      <input type="checkbox" name="enfantsNon" id="enfantsNon"><label for="enfantsNon">Non</label>

      <!-- Si oui, afficher : -->
      <section id="casquesEnfants" style="display: none;">
        <h4>Voulez-vous louer un casque antibruit pour enfants* (2€ / casque) ?</h4>
        <label for="nombreCasquesEnfants">Nombre de casques souhaités :</label>
        <input type="number" name="nombreCasquesEnfants" id="nombreCasquesEnfants" required min="0">
        <p>*Dans la limite des stocks disponibles.</p>
      </section>

      <h3>Profitez de descentes en luge d'été à tarifs avantageux !</h3>
      <label for="NombreLugesEte">Nombre de descentes en luge d'été :</label>
      <input type="number" name="NombreLugesEte" id="NombreLugesEte" required min="0">
      
        <p class="bouton" id="btnPrecedent">Précédent</p><p class="bouton" id="btnSuivant2">Suivant</p>
      

    </fieldset>
    <fieldset id="coordonnees">
      <legend>Coordonnées</legend>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <label for="telephone">Téléphone :</label>
        <input type="text" name="telephone" id="telephone" required>
        <label for="adressePostale">Adresse Postale :</label>
        <input type="text" name="adressePostale" id="adressePostale" required>
        <br>
        <p class="bouton" id="btnPrecedent2">Précédent</p> <input type="submit" name="soumission" class="bouton" id=btnReserver value="Réserver">
    </fieldset>
  </form>
  <?php
  include "./includes/footer.php";
  ?>
</body>
</html>