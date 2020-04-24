<?php

require 'Modele/Modele.php';

// Affiche la liste de tous les meals du restaurant
function accueil() {
  $meals = getMeals();
  require 'Vue/vueAccueil.php';
}

// Affiche les détails sur un article
function meal($idMeal, $erreur) {
    $meal = getMeal($idMeal);
  
    require 'Vue/vueMeal.php';
}

// Affiche la liste de tous les articles du blog
function apropos() {
    require 'Vue/vueApropos.php';
}

function nouvelMeal() {
    require 'Vue/vueAjouter.php';
}
// Supprimer un meal
function supprimer($meal_id) {
	
        deleteMeal($meal_id);
    
      //Recharger la page pour mettre à jour la liste des meals associés
    header('Location: index.php?action=meal&meal_id=' . $meal['meal_id']);
}


function ajouter($meal) {
   
       setMeal($meal);
    
    header('Location: index.php');
}

function confirmer($meal_id) {
    // Lire meal e à l'aide du modèle
    $meal = getMeal($meal_id);
    require 'Vue/vueConfirmer.php';
}



// Affiche une erreur
function erreur($msgErreur) {
  require 'Vue/vueErreur.php';
}