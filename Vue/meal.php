<?php

require 'Modele.php';

try {
  if (isset($_GET['meal_id'])) {
    // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
    $meal_id = intval($_GET['meal_id']);
    if ($meal_id != 0) {
      $meal = getmeal($meal_id);
      require 'vueMeal.php';
    }
    else
      throw new Exception("Identifiant de Meal incorrect");
  }
  else
    throw new Exception("Aucun identifiant de Meal");
}
catch (Exception $e) {
  $msgErreur = $e->getMessage();
  require 'vueErreur.php';
}