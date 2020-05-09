<?php $titre = 'Restauration - Modifier'; ?>

<meal>
    <header>
        <p><h1>
            Modifier?
        </h1>
        <?= $meal['Date_of_meal'] ?>, <?= $meal['Other_Details'] ?> <br/>
        <strong><?= $meal['Meal_Details'] ?></strong><br/>
        <?= $meal['Cost_of_meal'] ?>
        </p>
    </header>
	<form action="Meals/miseAJour" method="post">
 
    <h2>Modifier un plat</h2>
	
        <p>
        <label for="Cost_of_meal">Coût du plat</label> :  <input type="number" name="Cost_of_meal" id="Cost_of_meal" value="<?= $this->nettoyer($meal['Cost_of_meal'])?>" /><br />
		
	

		
		
		<label for="Other_Details">detail</label> 
		
			<select name="Other_Details" value="<?= $this->nettoyer($meal['Other_Details'])?>" >

				<option value="Entrée">Entrée</option>

				<option value="Salade">Salade</option>

				<option value="Plat Principale">Plat Principale</option>

				<option value="Dessert">Dessert</option>

			</select><br />
		
		<label for="Meal_Details">description</label> :  <textarea type="text" name="Meal_Details" id="Meal_Details" value="<?= $this->nettoyer($meal['Meal_Details'])?>" >Écrivez votre commentaire ici</textarea><br />
	
		

      
	    <input type="hidden" name="meal_id" value="<?= $this->nettoyer($meal['meal_id']) ?>" /><br />

	   
		<input type="submit" value="Envoyer" />
	</p>
		   		
</form>
 
</meal>

<form action="Meals/lire" method="post">
		<p>
		<input type="submit" value="Annuler" />
		</p>
	</form>


