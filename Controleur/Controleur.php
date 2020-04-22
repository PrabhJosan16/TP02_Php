<?php

require 'Modele/Modele.php';

// Affiche la liste de tous les meals du restaurant
function accueil() {
  $meals = getMeals();
  require 'Vue/vueAccueil.php';
}

// Affiche les détails sur un meal
function meal($idMeal) {
  $meal = getMeal($idMeal);
  $dishes = getDishes($idMeal);
  require 'Vue/vueMeal.php';
}
function nouvelMeal() {
    require 'Vue/vueAjouter.php';
}


function ajouter($meal) {
   
       setMeal($meal);
    
    header('Location: index.php');
}



// Affiche une erreur
function erreur($msgErreur) {
  require 'Vue/vueErreur.php';
}