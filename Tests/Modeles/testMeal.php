<?php

require_once 'Modele/Meal.php';

$tstMeal = new Meal;
$meals = $tstMeal->getMeals();
echo '<h3>Test getMeals : </h3>';
var_dump($meals->rowCount());

echo '<h3>Test getMeals : </h3>';
$meal =  $tstMeal->getMeals(1);
var_dump($meal);