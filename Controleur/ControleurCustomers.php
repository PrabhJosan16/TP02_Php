<?php
require_once 'Framework/Controleur.php';
require_once 'Modele/Customer.php';

class ControleurCustomers extends Controleur {

    private $customer;

    public function __construct() {
        $this->customer = new Customer(); 
    }
	
	public function index() {
        $customers = $this->customer->getCustomer();
        $this->genererVue(['customers' => $customers]);
    }
	
	public function afficherClient() {
        $customers = $this->customer->getCustomers();
        $this->genererVue(['customers' => $customers]);
    }
	
	public function ajouter() {
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $this->genererVue(['erreur' => $erreur]);
    }
	public function nouvelCustomer() {
        $client['Customer_Details'] = $this->requete->getParametre('Customer_Details');
        $client['contact'] = $this->requete->getParametre('contact');
        $this->customer->setCustomer($client);
        
        $this->rediriger('index.php' );
    }
	
	
	
	
	
	
	
	
}