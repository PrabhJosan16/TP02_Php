<?php

require_once 'Framework/Modele.php';

class Customer extends Modele {

	// Renvoie la liste des customers associés à un meal
	function getCustomers() {
		$sql ='SELECT  Customer_ID, Customer_Details, contact FROM customers ';
		$customers = $this->executerRequete($sql);
		return $customers;
	}

	// Renvoie un customer spécifique
	function getCustomer($idCustomer) {
		$sql = 'SELECT from customers WHERE Customer_ID = ?';
        $customer = $this->executerRequete($sql, array($idCustomer));
        if ($customer->rowCount() > 0){
            return $customer->fetch();  // Accès à la première ligne de résultat
		}else{
            throw new Exception("Aucun customer ne correspond à l'identifiant '$idCustomer'");
		}
    }
	
	
	function setCustomer($customer) {	
		$sql = 'INSERT INTO customers ( Customer_Details , contact ) VALUES(?,?)' ;
		$result = $this->executerRequete($sql, [$customer['Customer_Details'], $customer['contact']]);
        return $result;
	}
	
	
	
	
	
	
	
	
	
	
}



	