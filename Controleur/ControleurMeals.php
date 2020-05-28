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
}