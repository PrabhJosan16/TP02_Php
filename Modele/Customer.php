<?php

require_once 'Modele/Modele.php';

class Customer extends Modele {

// Renvoie la liste des customers associés à un meal
function getCustomers($idMeal) {
    $bdd = getBdd();
    $customers = $bdd->prepare('select * from customers'
            . ' where meal_id = ?');
    $customers->execute(array($idMeal));
    return $customers;
}

// Renvoie un customer spécifique
function getCommentaire($Customer_ID) {
    $bdd = getBdd();
    $customer = $bdd->prepare('select * from customers'
            . ' where Customer_ID = ?');
    $customer->execute(array($Customer_ID));
    if ($customer->rowCount() == 1)
        return $customer->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun customer ne correspond à l'identifiant '$Customer_ID'");
    return $customer;
}

}