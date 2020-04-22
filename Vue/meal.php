<?php

require 'Modele.php';

try {
  if (isset($_GET['id'])) {
    // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
    $id = intval($_GET['id']);
    if ($id != 0) {
      $meal = getmeal($id);
      $dishes = getDishes($id);
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