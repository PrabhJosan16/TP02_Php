<?php $titre = 'Restauration - Modifier'; ?>

<meal>
    <header>
        <p><h1>
            Modifier?
        </h1>
        <?= $customer['Customer_Details'] ?> <br/>
        <strong><?= $customer['contact'] ?></strong><br/>
        </p>
    </header>
<form action="Customers/nouvelCustomer" method="post">
 
    <h2>Ajouter un Client</h2>
        <label for="Customer_Details"> Nom du Client :</label> 
		<input type="text" name="Customer_Details" id="Customer_Details" /><br />
		
		<label for="contact"> Email du Client :</label> 
		<input type="text" name="contact" id="contact" /><br />
		
		
        <input type="submit" value="Envoyer" />
	</p>
</form>
 
</meal>

<form action="AdminMeals/index" method="post">
		<p>
		<input type="submit" value="Annuler" />
		</p>
	</form>


