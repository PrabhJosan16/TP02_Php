<?php

require_once 'Framework/Vue.php';
$meals = [
        'Meal_ID' => '18',
		'Other_Details' => 'Dessert',
        'Meal_Details' => 'Gateau à la vanille',
        'Date_of_meal' => '2020-03-06 13:56:05',
		'Cost_of_meal' => '15'
	];
$vue = new Vue('index', 'modifier');
$vue->generer(['meals' => $meals], null);
