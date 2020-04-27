

<?php

require 'Controleur/Controleur.php';

try {
    if (isset($_GET['action'])) {

        // À propos
        if ($_GET['action'] == 'apropos') {
            apropos();
        } else

        // Afficher un meal
        if ($_GET['action'] == 'meal') {
            if (isset($_GET['id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $id = intval($_GET['id']);
                if ($id != 0) {
                    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
                    meal($id, $erreur);
                } else
                    throw new Exception("Identifiant d'meal incorrect");
            } else
                throw new Exception("Aucun identifiant d'meal");

            // Ajouter un dishes
        } else if ($_GET['action'] == 'dishe') {
            if (isset($_POST['meal_id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $id = intval($_POST['meal_id']);
                if ($id != 0) {
                    // vérifier si l'article existe;
                    $meal = getMeal($id);
                    // Récupérer les données du formulaire
                    $dishe = $_POST;
                    // Ajuster la valeur de la case à cocher
                  
                    //Réaliser l'action dishe du contrôleur
                    dishe($dishe);
                } else
                    throw new Exception("Identifiant d'article incorrect");
            } else
                throw new Exception("Aucun identifiant d'article");

            // Confirmer la suppression
        } else if ($_GET['action'] == 'confirmer') {
            if (isset($_GET['meal_id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $meal_id = intval($_GET['meal_id']);
                if ($meal_id != 0) {
                    confirmer($meal_id);
                } else
                    throw new Exception("Identifiant de meal incorrect");
            } else
                throw new Exception("Aucun identifiant de meal");

            // Supprimer un meal
        } else if ($_GET['action'] == 'supprimer') {
            if (isset($_POST['meal_id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $meal_id = intval($_POST['meal_id']);
                if ($meal_id != 0) {
                    supprimer($meal_id);
                } else
                    throw new Exception("Identifiant de meal incorrect");
            } else
                throw new Exception("Aucun identifiant de meal");
			
			
			     // Confirmer la modification
        } else if ($_GET['action'] == 'confirmerModifier') {
            if (isset($_GET['meal_id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $meal_id = intval($_GET['meal_id']);
                if ($meal_id != 0) {
                    confirmerModification($meal_id);
                } else
                    throw new Exception("Identifiant de meal incorrect");
            } else
                throw new Exception("Aucun identifiant de meal");

            // modifier un meal
        } else if ($_GET['action'] == 'modification') {
            if (isset($_POST['meal_id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $meal_id = intval($_POST['meal_id']);
                if ($meal_id != 0) {
                    modifier($meal_id);
                } else
                    throw new Exception("Identifiant de meal incorrect");
            } else
                throw new Exception("Aucun identifiant de meal");
			

            // Ajouter un meal
        } else if ($_GET['action'] == 'nouvelMeal') {
            nouvelMeal();

            // Enregistrer le meal
        } else if ($_GET['action'] == 'ajouter') {
            $meal = $_POST;
            ajouter($meal);

            // CHerche les types pour l'autocomplete
        } else if ($_GET['action'] == 'quelsTypes') {
            quelsTypes($_GET['term']);
        } else {
            // Fin des actions
            throw new Exception("Action non valide");
        }
    } else {
        accueil();  // action par défaut
    }
} catch (Exception $e) {
    erreur($e->getMessage());
}
