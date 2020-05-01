<?php

require_once 'Vue/Vue.php';
$meal = [
        'meal_id' => '18',
		'detail' => 'Dessert',
        'description' => 'Gateau à la vanille',
        'date' => '2020-03-06 13:56:05',
		'prix' => 15'
	];
$vue = new Vue('confirmer');
$vue->generer(['meal' => $meal]);
