<?php

// Renvoie la liste de tous les meals, triés par identifiant décroissant
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
	$requete = $bdd->prepare('DELETE FROM meals WHERE meal_id = ?');
	$requete->execute(array($meal_id));

	 return $requete;
}



// Renvoie la liste des dishes associés à un billet
function getDishes($idMeal) {
  $bdd = getBdd();
  $dishes = $bdd->prepare('select Meal_ID as id, Meal_item_ID as item_id, Quantity as quantite from meal_dishes');
  $dishes->execute(array(idMeal));
  return $dishes;
}

// Renvoie un dishes spécifique
function getDishe($id) {
    $bdd = getBdd();
    $dishe = $bdd->prepare('select * from meal_dishes');
    $dishe->execute(array($id));
    if ($dishe->rowCount() == 1)
        return $dishe->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun dishe ne correspond à l'identifiant '$id'");
    return $dishe;
}

// Ajoute un dishes associés à un article
function setDishe($dishe) {
    $bdd = getBdd();
    $req = $bdd->prepare('INSERT INTO meals ( Cost_of_meal, Other_Details, Meal_Details) VALUES(?,?,?)');
	$req->execute(array($_POST['Cost_of_meal'], $_POST['Other_Details'],$_POST['Meal_Details']));
    return $req;
}



// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', 'passwordA2019', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}



