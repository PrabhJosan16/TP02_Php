<?php

require 'Modele/Modele.php';

try {
$meals = getMeal();
require 'Vue/vueAccueil.php';

}
catch (Exception $e) {
   $msgErreur = $e->getMessage();
  require 'Vue/vueErreur.php';
}
