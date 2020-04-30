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
        if (H204A4_PUBLIC) {
            $_SESSION['h204a4message'] = "Ajouter un meal n'est pas permis en démonstration";
        } else {
            $this->meal->setArticle($meal);
        }
        $this->meals();
    }

// Modifier un meal existant    
    public function modifierArticle($id) {
        $meal = $this->meal->getMeal($id);
        $vue = new Vue("ModifierArticle");
        $vue->generer(['meal' => $meal]);
    }

// Enregistre l'meal modifié et retourne à la liste des meals
    public function miseAJourArticle($meal) {
        if (H204A4_PUBLIC) {
            $_SESSION['h204a4message'] = "Moddifier un meal n'est pas permis en démonstration";
        } else {
            $this->meal->updateArticle($meal);
        }
        $this->meals();
    }

}
