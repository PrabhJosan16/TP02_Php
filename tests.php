<?php
if (isset($_GET['test'])) {
    if ($_GET['test'] == 'modeleMeal') {
        require 'Tests/Modeles/testMeal.php';
		
    } else if ($_GET['test'] == 'vueMeals') {
        require 'Tests/Vues/testVueMeals.php';
		
    } else if ($_GET['test'] == 'vueConfirmer') {
        require 'Tests/Vues/testVueConfirmer.php';
		
	} else if ($_GET['test'] == 'vueConfirmerModification') {
        require 'Tests/Vues/testVueConfirmerModification.php';
		
    } else if ($_GET['test'] == 'vueErreur') {
        require 'Tests/Vues/testVueErreur.php';
    } else {
        echo '<h3>Test inexistant!!!</h3>';
    }
}
?>
<h3>Tests de Modèles</h3>
<ul>
    <li>
        <a href="tests.php?test=modeleMeal">Meal</a>
    </li>
</ul>
<h3>Tests de Vues</h3>
<ul>
    <li>
        <a href="tests.php?test=vueMeals">Meals</a>
    </li>
    <li>
        <a href="tests.php?test=vueConfirmer">Confirmer</a>
    </li>
	<li>
        <a href="tests.php?test=vueConfirmerModification">Confirmer Modification</a>
    </li>
    <li>
        <a href="tests.php?test=vueErreur">Erreur</a>
    </li>
</ul>
