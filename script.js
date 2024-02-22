let fieldsetReservation = document.getElementById("reservation");
let fieldsetOptions = document.getElementById("options");
let fieldsetCoordonnees = document.getElementById("coordonnees");

fieldsetReservation.style.display = "block";
fieldsetOptions.style.display = "none";
fieldsetCoordonnees.style.display = "none";

let btnSuivant1 = document.getElementById("btnSuivant1");

btnSuivant1.addEventListener('click', () => {
  fieldsetReservation.style.display = "none";
  fieldsetOptions.style.display = "block";
  fieldsetCoordonnees.style.display = "none";
})

let btnSuivant2 = document.getElementById("btnSuivant2");

btnSuivant2.addEventListener('click', () => {
  fieldsetReservation.style.display = "none";
  fieldsetOptions.style.display = "none";
  fieldsetCoordonnees.style.display = "block";
})

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
  
  choixJour1.addEventListener("change", function() {
    if (choixJour1.checked) {
      choixJour2.checked = false;
      choixJour3.checked = false;
    }
  });

  choixJour2.addEventListener("change", function() {
    if (choixJour2.checked) {
      choixJour1.checked = false;
      choixJour3.checked = false;
    }
  });

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

  choixJour12.addEventListener("change", function() {
    if (choixJour12.checked) {
      choixJour23.checked = false;
    }
  });

  choixJour23.addEventListener("change", function() {
    if (choixJour23.checked) {
      choixJour12.checked = false;
    }
  });
});

function choixDate2jours() {
  let pass2joursCheckbox = document.getElementById("pass2jours");
  let pass2joursDateSection = document.getElementById("pass2joursDate");

  pass2joursDateSection.style.display = pass2joursCheckbox.checked ? "block" : "none";
}

function afficherTarifReduit() {
  let tarifReduit = document.getElementById("tarifReduit");
  let affichageTarifReduit = document.getElementById("tarifsReduits");

  affichageTarifReduit.style.display = tarifReduit.checked ? "block" : "none";
}

function afficherCasques() {
  let checkboxEnfants = document.getElementById("enfantsOui");
  let sectionCasquesEnfants = document.getElementById("casquesEnfants");

  sectionCasquesEnfants.style.display = checkboxEnfants.checked ? "block" : "none";
};

