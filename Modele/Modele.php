<?php

// Renvoie la liste de tous les meals
function getMeals() {
  $bdd = getBdd();
  $reponse = $bdd->query('SELECT  Customer_ID as id, Meal_ID as meal_id, Date_of_meal as date, Cost_of_meal as prix, Other_Details as detail, Meal_Details as description FROM  meals ');
  return $reponse;
}

// Renvoie les informations sur un meals
function getMeal($idMeal) {
  $bdd = getBdd();
  $meals = $bdd->prepare('SELECT  Customer_ID as id, Meal_ID as meal_id, Date_of_meal as date, Cost_of_meal as prix, Other_Details as detail, Meal_Details as description FROM  meals where meal_id=?');
  $meals->execute(array($idMeal));
  if ($meals->rowCount() == 1)
    return $meals->fetch();  // Accès à la première ligne de résultat
  else
   throw new Exception("Aucun meals ne correspond à l'identifiant '$idMeal'");
}


// Renvoie la liste de tous les meals, triés par identifiant décroissant
function setMeal($meal) {
    $bdd = getBdd();
   $req = $bdd->prepare('INSERT INTO meals ( Cost_of_meal, Other_Details, Meal_Details) VALUES(?,?,?)');
	$req->execute(array($meal['Cost_of_meal'], $meal['Other_Details'],$meal['Meal_Details']));

	
	return $req;
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
	$bdd = getBdd();
	$req = $bdd->prepare('UPDATE meals SET Cost_of_meal = ?, Other_Details = ?, Meal_Details = ? WHERE meal_id = ?');

	$req->execute(array( $_POST['Cost_of_meal'], $_POST['Other_Details'], $_POST['Meal_Details'], $_POST['meal_id']));
	


	 return $req;
}



// Renvoie la liste des customers associés à un meal
function getCustomers($idMeal) {
    $bdd = getBdd();
    $customers = $bdd->prepare('select * from customers'
            . ' where meal_id = ?');
    $customers->execute(array($idMeal));
    return $customers;
}

// Renvoie un customer spécifique
function getCommentaire($Customer_ID) {
    $bdd = getBdd();
    $customer = $bdd->prepare('select * from customers'
            . ' where Customer_ID = ?');
    $customer->execute(array($Customer_ID));
    if ($customer->rowCount() == 1)
        return $customer->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun customer ne correspond à l'identifiant '$Customer_ID'");
    return $customer;
}





// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', 'passwordA2019', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}



