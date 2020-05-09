<?php

require_once 'Framework/Modele.php';

class Meal extends Modele {

	// Renvoie la liste de tous les meals
	function getMeals() {
	
	  $sql ='SELECT  Customer_ID , Meal_ID , Date_of_meal , Cost_of_meal, Other_Details , Meal_Details  FROM  meals ';
	   $meals = $this->executerRequete($sql);
	  return $meals;
	}

	// Renvoie les informations sur un meals
	
	    public function getMeal($idMeal) {
       $sql = 'SELECT  Customer_ID , Meal_ID , Date_of_meal , Cost_of_meal , Other_Details , Meal_Details  FROM  meals where meal_id=?';
        $meal = $this->executerRequete($sql, array($idMeal));
        if ($meal->rowCount() > 0)
            return $meal->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun meal ne correspond à l'identifiant '$idMeal'");
    }
	

	// Renvoie la liste de tous les meals, triés par identifiant décroissant
	function setMeal($meal) {
		
	    $sql = 'INSERT INTO meals ( Cost_of_meal, Other_Details, Meal_Details) VALUES(?,?,?)';
		$result = $this->executerRequete($sql, [$meal['Cost_of_meal'], $meal['Other_Details'], $meal['Meal_Details']]);

        return $result;

	}
	


	// Supprime un meal
	function deleteMeal($meal_id) {
	
		 $sql =  'DELETE FROM meals WHERE meal_id = ?';
		 $result = $this->executerRequete($sql, [$meal_id]);
		 return $result;
	}
	
	//modifie meal
	function modifyMeal($meal) {
		
		 $sql = 'UPDATE meals SET Cost_of_meal = ?, Other_Details = ?, Meal_Details = ? WHERE meal_id = ?';

		$result = $this->executerRequete($sql, [$meal['Cost_of_meal'], $meal['Other_Details'], $meal['Meal_Details'], $meal[meal_id]]);

		  return $result;
	}

}