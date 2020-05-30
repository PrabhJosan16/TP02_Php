<?php $titre = 'Restauration - Supprimer'; ?>

<meal>
    <header>
        <p><h1>
            Supprimer?
        </h1>
        <?= $meal['Date_of_meal'] ?>, <?= $meal['Other_Details'] ?> <br/>
        <strong><?= $meal['Meal_Details'] ?></strong><br/>
        <?= $meal['Cost_of_meal'] ?>
        </p>
    </header>
</meal>

<form action="AdminMeals/supprimer" method="post">
	 <input type="hidden" name="Meal_ID" value="<?= $this->nettoyer($meal['Meal_ID']) ?>" /><br />
    <input type="submit" value="Oui" />
</form>
<form action="AdminMeals/index" method="post">
	<p>
		<input type="submit" value="Annuler" />
	</p>
</form>


