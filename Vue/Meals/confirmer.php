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

<form action="Meals/supprimer" method="post">
	 <input type="hidden" name="meal_id" value="<?= $this->nettoyer($meal['meal_id']) ?>" /><br />
    <input type="submit" value="Oui" />
</form>
<form action="Meals/lire" method="post">
		<p>
		<input type="submit" value="Annuler" />
		</p>
		</form>


