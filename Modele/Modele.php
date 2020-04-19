<?php

// Renvoie la liste de tous les meals, triés par identifiant décroissant


// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', 'passwordA2019', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}



function getMeal($idMeals) {
    $bdd = getBdd();
    $meal = $bdd->prepare('SELECT  Customer_ID as id, Meal_ID as meal_id, Date_of_meal as date, Cost_of_meal as prix, Other_Details as detail, Meal_Details as description FROM  meals where Meal_ID=?');
    $meal->execute(array($idMeals));
    if ($meal->rowCount() > 0)
        return $meal->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun meal ne correspond à l'identifiant '$idMeals'");
}
