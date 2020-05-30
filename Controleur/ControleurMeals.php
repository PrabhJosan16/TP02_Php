<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Meal.php';



class ControleurMeals extends Controleur {

    private $meal;
   private $customer;

    public function __construct() {
        $this->meal = new Meal();


      
    }
	
	// Affiche la liste de tous les meals du restaurant
    public function index() {
        $meals = $this->meal->getMeals();
        $this->genererVue(['meals' => $meals]);
		

	}
// Affiche les détails sur un meal
    public function lire() {
        $idMeal = $this->requete->getParametreId("id");
        $meal = $this->meal->getMeal($idMeal);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $this->genererVue(['meal' => $meal,  'erreur' => $erreur]);
    }
		public function ajouter() {
        $this->genererVue();
    }
	
	// Enregistre le nouvel meal et retourne à la liste des meals
    public function nouvelMeal() {
     
            
            $meal['Cost_of_meal'] = $this->requete->getParametre('Cost_of_meal');
            $meal['Other_Details'] = $this->requete->getParametre('Other_Details');
            $meal['Meal_Details'] = $this->requete->getParametre('Meal_Details');
            $this->meal->setMeal($meal);
        
        $this->executerAction('index');
    }

	
	
}