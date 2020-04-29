<?php

require 'Modele.php';

try {
    if (isset($_GET['meal_id'])) {
        // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
        $meal_id = intval($_GET['meal_id']);
        if ($meal_id != 0) {
            $meals = getMeal($meal_id);
            $commentaires = getCommentaires($meal_id);
            require 'vueArticle.php';
        } else
            throw new Exception("Identifiant de meal incorrect");
    } else
        throw new Exception("Aucun identifiant de meal");
} catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}
