<?php
require_once 'Controleur/ControleurAdmin.php';
require_once 'Modele/Customer.php';

class ControleurAdminCustomer extends ControleurAdmin {

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
	
	// Affiche les détails sur un meal
    public function lire() {
        $idCustomer = $this->requete->getParametreId("id");
        $customer = $this->customer->getCustomer($idCustomer);
        $erreur = $this->requete->getSession()->existeAttribut("erreur") ? $this->requete->getsession()->getAttribut("erreur") : '';
        $this->genererVue(['customer' => $customer,  'erreur' => $erreur]);
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
	
	// Modifier un customer existant    
    public function modifier() {
        $id = $this->requete->getParametreId('id');
        $customer = $this->customer->getCustomer($id);
        $this->genererVue(['customer' => $customer]);
    }

	// Confirmer la suppression d'un commentaire
    public function confirmerCustomer() {
        $id = $this->requete->getParametreId('id');
        // Lire le commentaire à l'aide du modèle
        $customer = $this->customer->getCustomer($id);
        $this->genererVue(['customer' => $customer]);
    }
	
	// Enregistre l'customer modifié et retourne à la liste des meals
    public function miseAJour() {
       
            $customer['Customer_ID'] = $this->requete->getParametre('Customer_ID');
            $customer['Customer_Details'] = $this->requete->getParametre('Customer_Details');
            $customer['contact'] = $this->requete->getParametre('contact');
            $this->customer->updateCustomer($customer);
        
        $this->executerAction('index');
    }

	

	
	// Supprimer un customer
    public function supprimer() {
        $id = $this->requete->getParametreId("Customer_ID");
        // Lire le customer afin d'obtenir le id de l'article associé
        $customer = $this->customer->getCustomer($id);
        // Supprimer le customer à l'aide du modèle
        $this->customer->deleteCustomer($id);
        //Recharger la page pour mettre à jour la liste des customer associés
        $this->executerAction('index');
    }
	

	
	
	
	
}