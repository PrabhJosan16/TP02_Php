<?php

require 'Modele/Modele.php';

// Affiche la liste de tous les meals du restaurant
function accueil() {
  $meals = getMeals();
  require 'Vue/vueAccueil.php';
}



// Affiche les détails sur un meal
function meal($meal_id, $erreur) {
    $meal = getMeal($meal_id);
  
    require 'Vue/vueMeal.php';
}

// Affiche la liste de tous les articles du Retaurant
function apropos() {
    require 'Vue/vueapropos.php';
}
//ajout d'un nouveau meal
function nouvelMeal() {
    require 'Vue/vueAjouter.php';
}
// Supprimer un meal
function supprimer($meal_id) {
		
		$meal = getMeal($meal_id);
		
		
		
        deleteMeal($meal_id);
    
      //Recharger la page pour mettre à jour la liste des meals associés
   header('Location: index.php');
}

// modifier un meal
function modifier($meal_id) {
		
		$meal = getMeal($meal_id);

        modifyMeal($meal_id);

      //Recharger la page pour mettre à jour la liste des meals associés

   header('Location: index.php');
}

//ajoute un meal
function ajouter($meal) {
   
       setMeal($meal);
    
    header('Location: index.php');
}
//confirmation pour suppimer 
function confirmer($meal_id) {
    // Lire meal e à l'aide du modèle
    $meal = getMeal($meal_id);
    require 'Vue/vueConfirmer.php';
}
//confirmation pour modifier
function confirmerModification($meal_id) {
    // Lire meal e à l'aide du modèle
    $meal = getMeal($meal_id);
    require 'Vue/vueConfirmerModifier.php';
}


// Affiche une erreur
function erreur($msgErreur) {
  require 'Vue/vueErreur.php';
}