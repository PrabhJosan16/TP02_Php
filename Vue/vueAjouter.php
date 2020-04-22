<?php $titre = "Restauration - Ajouter un Meal"; ?>

<?php ob_start(); ?>
<header>
    <h1 id="titreReponses">Ajouter un meal :</h1>
</header>
<form action="vueAjouter.php?action=ajouter" method="post">
    <h2>Ajouter un article</h2>
    <h2>Ajouter un plat</h2>
	
        <p>
        <label for="Cost_of_meal">Coût du plat</label> :  <input type="number" name="Cost_of_meal" id="Cost_of_meal" /><br />
		


		
		
		<label for="Other_Details">Repas</label> 
		
			<select name="Other_Details">

				<option value="Entrée">Entrée</option>

				<option value="Salade">Salade</option>

				<option value="Plat Principale">Plat Principale</option>

				<option value="Dessert">Dessert</option>

			</select><br />
		
		<label for="Meal_Details">Commentaire</label> :  <textarea type="text" name="Meal_Details" id="Meal_Details" >Écrivez votre commentaire ici</textarea><br />
	
		

        <input type="submit" value="Envoyer" />
	</p>
</form>

<?php $contenu = ob_get_clean(); ?>

<?php require 'Vue/gabarit.php'; ?>

