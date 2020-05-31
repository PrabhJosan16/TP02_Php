<?php $this->titre  = 'Restauration'; ?>

<a href="Meals/ajouter">
    <h2 class="titreArticle">Ajouter un Meal</h2>
</a>
<a href="Meals/ajouterClient">
    <h2 class="titreArticle">Ajouter un Client</h2>
</a>


<form action="Customers/nouvelCustomer" method="post">
 
    <h2>Ajouter un Client</h2>
        <label for="Customer_Details"> Nom du Client :</label> 
		<input type="text" name="Customer_Details" id="Customer_Details" /><br />
		
		<label for="contact"> Méthode de contacte du Client :</label> 
		<input type="text" name="contact" id="contact" /><br />
		
		
        <input type="submit" value="Envoyer" />
	</p>
</form>
