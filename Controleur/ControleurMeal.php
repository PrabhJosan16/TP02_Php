<?php

require_once 'Modele/Meal.php';
require_once 'Modele/Customer.php';
require_once 'Vue/Vue.php';

class ControleurMeal {

    private $meal;
    private $customer;

    public function __construct() {
        $this->meal = new Meal();
      
    }

// Affiche la liste de tous les meals du blog
    public function meals() {
        $meals = $this->meal->getMeals();
        $vue = new Vue("Meals");
        $vue->generer(['meals' => $meals]);
    }

// Affiche les détails sur un meal
    public function meal($idMeal, $erreur) {
        $meal = $this->meal->getMeal($idMeal);
        $vue = new Vue("Meal");
        $vue->generer(['meal' => $meal, 'erreur' => $erreur]);
    }

    public function nouvelMeal() {
        $vue = new Vue("Ajouter");
        $vue->generer();
    }

// Enregistre le nouvel meal et retourne à la liste des meals
    public function ajouter($meal) {
       
        $this->meal->setMeal($meal);
       
        $this->meals();
    }

// Modifier un meal existant    
    public function confirmerModifier($idMeal) {
        $meal = $this->meal->getMeal($idMeal);
        $vue = new Vue("confirmerModifier");
        $vue->generer(['meal' => $meal]);
    }
	
	// Modifier un meal existant    
    public function confirmer($idMeal) {
        $meal = $this->meal->getMeal($idMeal);
        $vue = new Vue("Confirmer");
        $vue->generer(['meal' => $meal]);
    }

// Enregistre l'meal modifié et retourne à la liste des meals
    public function modification($meal) {
      
        $this->meal->modifyMeal($meal);
        
        $this->meals();
    }
	
	// Supprimer un commentaire
    public function supprimer($meal_id) {
     
       
        
            
            $this->meal->deleteMeal($meal_id);
       
        $this->meals();
    }


}
