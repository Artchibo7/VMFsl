let fieldsetReservation = document.getElementById("reservation");
let fieldsetOptions = document.getElementById("options");
let fieldsetCoordonnees = document.getElementById("coordonnees");

//Par défaut afficher seulement la section "réservation"
fieldsetReservation.style.display = "block";
fieldsetOptions.style.display = "none";
fieldsetCoordonnees.style.display = "none";

//Au clic sur le bouton suivant, passer à la section "options" et cacher les autres
let btnSuivant1 = document.getElementById("btnSuivant1");

btnSuivant1.addEventListener('click', () => {
  fieldsetReservation.style.display = "none";
  fieldsetOptions.style.display = "block";
  fieldsetCoordonnees.style.display = "none";
})

//Au clic sur le bouton suivant, passer à la section "coordonnées" et cacher les autres
let btnSuivant2 = document.getElementById("btnSuivant2");

btnSuivant2.addEventListener('click', () => {
  fieldsetReservation.style.display = "none";
  fieldsetOptions.style.display = "none";
  fieldsetCoordonnees.style.display = "block";
})

//Afficher le choix de la date pour le pass 1 jour
function choixDate1jour() {
  let pass1jourCheckbox = document.getElementById("pass1jour");
  let pass1jourDateSection = document.getElementById("pass1jourDate");

  pass1jourDateSection.style.display = pass1jourCheckbox.checked ? "block" : "none";
}
//Décocher les checkbox de dates quand on sélectionne une date dans "CHOIX DATE 1 JOUR"
document.addEventListener("DOMContentLoaded", function() {
  let choixJour1 = document.getElementById("choixJour1");
  let choixJour2 = document.getElementById("choixJour2");
  let choixJour3 = document.getElementById("choixJour3");
//Empêcher de sélectionner plus d'une date 
  choixJour1.addEventListener("change", function() {
    if (choixJour1.checked) {
      choixJour2.checked = false;
      choixJour3.checked = false;
    }
  });
//Empêcher de sélectionner plus d'une date 
  choixJour2.addEventListener("change", function() {
    if (choixJour2.checked) {
      choixJour1.checked = false;
      choixJour3.checked = false;
    }
  });
//Empêcher de sélectionner plus d'une date 
  choixJour3.addEventListener("change", function() {
    if (choixJour3.checked) {
      choixJour1.checked = false;
      choixJour2.checked = false;
    }
  });
});

//Décocher une case quand une autre est cochée dans la section "CHOIX DATE 2 JOURS"
document.addEventListener("DOMContentLoaded", function() {
  let choixJour12 = document.getElementById("choixJour12");
  let choixJour23 = document.getElementById("choixJour23");
//Empêcher de sélectionner plus d'une date 
  choixJour12.addEventListener("change", function() {
    if (choixJour12.checked) {
      choixJour23.checked = false;
    }
  });
//Empêcher de sélectionner plus d'une date 
  choixJour23.addEventListener("change", function() {
    if (choixJour23.checked) {
      choixJour12.checked = false;
    }
  });
});
//Afficher le choix de date pour le pass 2 jours
function choixDate2jours() {
  let pass2joursCheckbox = document.getElementById("pass2jours");
  let pass2joursDateSection = document.getElementById("pass2joursDate");

  pass2joursDateSection.style.display = pass2joursCheckbox.checked ? "block" : "none";
}

//Afficher ou masquer les tarifs réduits
function afficherMasquerTarifsReduits() {
  let checkboxTarifReduit = document.getElementById("tarifReduit");
  let tarifsReduitsSection = document.getElementById("tarifsReduits");
  let tarifsNormauxSection = document.getElementById('tarifsNormaux');

  if (checkboxTarifReduit.checked) {
    tarifsReduitsSection.style.display = "block";
    tarifsNormauxSection.style.display = "none";
  } else {
    tarifsReduitsSection.style.display = "none";
    tarifsNormauxSection.style.display = "block";
  }
}

//Afficher la réservation de casques si la checkbox "enfants" est cochée
function afficherCasques() {
  let checkboxEnfants = document.getElementById("enfantsOui");
  let sectionCasquesEnfants = document.getElementById("casquesEnfants");

  sectionCasquesEnfants.style.display = checkboxEnfants.checked ? "block" : "none";
};



