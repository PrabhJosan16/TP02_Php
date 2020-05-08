<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Meal.php';


class ControleurMeals extends Controleur {

    private $meal;
  

    public function __construct() {
        $this->meal = new Meal();
      
    }
	
	// Affiche la liste de tous les meals du blog
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
     
            $meal['meal_id'] = $this->requete->getParametreId('meal_id');
            $meal['Cost_of_meal'] = $this->requete->getParametre('Cost_of_meal');
            $meal['Other_Details'] = $this->requete->getParametre('Other_Details');
            $meal['Meal_Details'] = $this->requete->getParametre('Meal_Details');
            $this->meal->setMeal($meal);
        
        $this->executerAction('index');
    }
	
	
	

	
	// Modifier un meal existant    
    public function modifier() {
        $id = $this->requete->getParametreId('id');
        $meal = $this->meal->getMeal($id);
        $this->genererVue(['meal' => $meal]);
    }

// Confirmer la suppression d'un commentaire
    public function confirmer() {
        $id = $this->requete->getParametreId('id');
        // Lire le commentaire à l'aide du modèle
        $meal = $this->meal->getMeal($id);
         $this->genererVue(['meal' => $meal]);
    }
	
	// Enregistre l'meal modifié et retourne à la liste des meals
    public function miseAJour() {
       
            $meal['meal_id'] = $this->requete->getParametreId('meal_id');
            $meal['Cost_of_meal'] = $this->requete->getParametre('Cost_of_meal');
            $meal['Other_Details'] = $this->requete->getParametre('Other_Details');
            $meal['Meal_Details'] = $this->requete->getParametre('Meal_Details');
            $this->meal->modifyMeal($meal);
        
        $this->executerAction('index');
    }

	
	// Supprimer un meal
    public function supprimer($meal_id) {
     
        $meal = $this->meal->getMeal($meal_id);
        
            
        $this->meal->deleteMeal($meal_id);
       
        header('Location: index.php');
    }


}