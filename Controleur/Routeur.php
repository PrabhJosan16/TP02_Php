<?php

//Attention il s'agit d'identificateurs à portée globale alors les nom doivent être exclusifs
//Une constante nommée simplement "public" ne serait pas une bonne idée
define("H204A4_PUBLIC", true); //si public alors aucune modification permise à la BD
session_start(); // Le message à afficher dans le gabarit lorsque ce n'est pas permis sera dans $_SESSION['h204a4message']

require_once 'Controleur/ControleurMeal.php';


require_once 'Vue/Vue.php';

class Routeur {

    private $ctrlMeal;
    private $ctrlCustomer;
    private $ctrlType;

    public function __construct() {
        $this->ctrlMeal = new ControleurMeal();
       
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                // À propos
                if ($_GET['action'] == 'apropos') {
                    $this->apropos();
					
                } else if ($_GET['action'] == 'meal') {
                    $meal_id = intval($this->getParametre($_GET, 'meal_id'));
                    if ($meal_id != 0) {
                        // Vérifier si une erreur est présente
                        $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
                        $this->ctrlMeal->meal($meal_id, $erreur);
                    } else
                        throw new Exception("Identifiant d'meal non valide");
					
					
					
                } else if ($_GET['action'] == 'customer') {
                    // Tester l'existence des paramètres requis
                    $meal_id = intval($this->getParametre($_POST, 'meal_id'));
                    if ($meal_id != 0) {
                        $this->getParametre($_POST, 'auteur');
                        $this->getParametre($_POST, 'titre');
                        $this->getParametre($_POST, 'texte');
                        $this->getParametre($_POST, 'prive');
                        // Enregistrer le comentaire
                        $this->ctrlCustomer->customer($_POST);
                    } else
                        throw new Exception("Identifiant d'meal non valide");
					
					
					
					
                } else if ($_GET['action'] == 'confirmer') {
                    $meal_id = intval($this->getParametre($_GET, 'meal_id'));
                    if ($meal_id != 0) {
                        $this->ctrlCustomer->confirmer($meal_id);
                    } else
                        throw new Exception("Identifiant de customer non valide");
                } else if ($_GET['action'] == 'supprimer') {
                    $meal_id = intval($this->getParametre($_POST, 'meal_id'));
                    if ($meal_id != 0) {
                        $this->ctrlCustomer->supprimer($meal_id);
                    } else
                        throw new Exception("Identifiant de customer non valide");
                } else if ($_GET['action'] == 'nouvelMeal') {

                    $this->ctrlMeal->nouvelMeal();

					} else if ($_GET['action'] == 'ajouter') {
                    // Tester l'existence des paramètres requis
                    $utilisateur_id = intval($this->getParametre($_POST, 'utilisateur_id'));
                    if ($utilisateur_id != 0) {
                        $this->getParametre($_POST, 'titre');
                        $this->getParametre($_POST, 'sous_titre');
                        $this->getParametre($_POST, 'texte');
                        $this->getParametre($_POST, 'type');
                        // Enregistrer l'meal
                        $this->ctrlMeal->ajouter($_POST);
                    } else
                        throw new Exception("Identifiant d'utilisateur non valide");
					
					
                } else if ($_GET['action'] == 'miseAJourArticle') {
                    // Tester l'existence des paramètres requis
                    $meal_id = intval($this->getParametre($_POST, 'meal_id'));
                    if ($meal_id != 0) {
                        $utilisateur_id = intval($this->getParametre($_POST, 'utilisateur_id'));
                        if ($utilisateur_id != 0) {
                            //Vérifier l'existence des paramètres
                            $this->getParametre($_POST, 'titre');
                            $this->getParametre($_POST, 'sous_titre');
                            $this->getParametre($_POST, 'texte');
                            $this->getParametre($_POST, 'type');
                            // Enregistrer l'meal
                            $this->ctrlMeal->miseAJourArticle($_POST);
                        } else
                            throw new Exception("Identifiant d'utilisateur non valide");
                    } else
                        throw new Exception("Identifiant d'meal non valide");
                } else if ($_GET['action'] == 'modifierArticle') {
                    $meal_id = intval($this->getParametre($_GET, 'meal_id'));
                    if ($meal_id != 0) {
                        $this->ctrlMeal->modifierArticle($meal_id);
                    } else
                        throw new Exception("Identifiant d'meal non valide");
                } else if ($_GET['action'] == 'quelsTypes') {
                    $term = $this->getParametre($_GET, 'term');
                    $this->ctrlType->quelsTypes($term);
                } else {
                    throw new Exception("Action non valide");
                }
            } else // aucune action définie : affichage des meals par défaut
                $this->ctrlMeal->meals();
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une explication de l'application
    private function apropos() {
        $vue = new Vue("Apropos");
        $vue->generer();
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        } else
            throw new Exception("Paramètre '$nom' absent");
    }

}
