<?php

require_once 'Framework/Vue.php';
$meals = [
    [   'meal_id' => '18',
		'detail' => 'Dessert',
        'description' => 'Gateau à la vanille',
        'date' => '2020-03-06 13:56:05',
		'prix' => '15'
	],
	[   'meal_id' => '19',
		'detail' => 'Entrée',
        'description' => 'Frites',
        'date' => '2020-04-22 20:32:05',
		'prix' => '4'
	],
	[   'meal_id' => '20',
		'detail' => 'Plat Principale',
        'description' => 'Pizza au fromage',
        'date' => '2020-04-24 16:47:51',
		'prix' => '25'
	]
];
$vue = new Vue('index', 'Meals');
$vue->generer(['meals' => $meals], null);
