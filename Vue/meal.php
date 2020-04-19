<?php

require 'Modele.php';

try {
  if (isset($_GET['id'])) {
    // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
    $id = intval($_GET['id']);
    if ($id != 0) {
      $meals = getMeals($id);
      $MealDishe = MealDishes($id);
      require 'vueBillet.php';
    }
    else
      throw new Exception("Identifiant de meal incorrect");
  }
  else
    throw new Exception("Aucun identifiant de meal");
}
catch (Exception $e) {
  $msgErreur = $e->getMessage();
  require 'vueErreur.php';
}