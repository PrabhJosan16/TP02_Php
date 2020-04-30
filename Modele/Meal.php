<?php

require_once 'Modele/Modele.php';

class Meal extends Modele {

	// Renvoie la liste de tous les meals
	function getMeals() {
	
	  $sql ='SELECT  Customer_ID as id, Meal_ID as meal_id, Date_of_meal as date, Cost_of_meal as prix, Other_Details as detail, Meal_Details as description FROM  meals ';
	   $meals = $this->executerRequete($sql);
	  return $meals;
	}

	// Renvoie les informations sur un meals
	function getMeal($idMeal) {
	  
	  $sql = 'SELECT  Customer_ID as id, Meal_ID as meal_id, Date_of_meal as date, Cost_of_meal as prix, Other_Details as detail, Meal_Details as description FROM  meals where meal_id=?';
	 
	 $meals = $this->executerRequete($sql, [$idMeal]);
	  if ($meals->rowCount() == 1)
		return $meals->fetch();  // Accès à la première ligne de résultat
	  else
	   throw new Exception("Aucun meals ne correspond à l'identifiant '$idMeal'");
	}

	// Renvoie la liste de tous les meals, triés par identifiant décroissant
	function setMeal($meal) {
		
	    $sql = 'INSERT INTO meals ( Cost_of_meal, Other_Details, Meal_Details) VALUES(?,?,?)';
		$result = $this->executerRequete($sql, [$meal['Cost_of_meal'], $meal['Other_Details'],$meal['Meal_Details']]);

        return $result;

	}

	// Supprime un meal
	function deleteMeal($meal_id) {
		$bdd = getBdd();
		$req = $bdd->prepare('DELETE FROM meals WHERE meal_id = ?');
		$req->execute(array($meal_id));
		

		 return $req;
	}
	//modifie meal
	function modifyMeal($meal_id) {
		
		 $sql = 'UPDATE meals SET Cost_of_meal = ?, Other_Details = ?, Meal_Details = ? WHERE meal_id = ?';

		$result = $this->executerRequete($sql, [$meal['Cost_of_meal'], $meal['Other_Details'], $meal['Meal_Details'], $meal['meal_id']]);
		


		  return $result;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}