<?php $this->titre  = 'Restauration'; ?>

<a href="AdminMeals/ajouter">
    <h2 class="titreArticle">Ajouter un Meal</h2>
</a>

<a href="AdminCustomer/ajouter">
    <h2 class="titreArticle">Ajouter un Client</h2>
</a>

<a href="AdminCustomer/afficherClient">
    <h2 class="titreArticle">AfficherClient</h2>
</a>

<?php foreach ($meals as $meal): 
	?>
	
  <meal>
    <header>
      <a /*href="<?= "index.php?action=meal&meal_id=" . $meal['Meal_ID'] ?>*/">
        <h1 class="titreArticle"><?= $meal['Other_Details'] ?></h1>
      </a>
      <time><?= $meal['Date_of_meal'] ?></time>
	   <p><?= $meal['Meal_Details'] ?></p>
    <p><?= $meal['Cost_of_meal'] ?></p>


	<p><a href="AdminMeals/confirmer/<?= $meal['Meal_ID'] ?>" >
        [Supprimer]
    </a>
	<p><a href="AdminMeals/modifier/<?= $this->nettoyer($meal['Meal_ID'])?>" >
        [Modifier]
    </a>

	

    </header>
  </meal>
 
  <hr />
<?php endforeach; ?>