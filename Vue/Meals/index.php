<?php $this->titre  = 'Restauration'; ?>

<a href="Meals/ajouter">
    <h2 class="titreArticle">Ajouter un Meal</h2>
</a>

<a href="Customers/ajouter">
    <h2 class="titreArticle">Ajouter un Client</h2>
</a>

<a href="Customers/afficherClient">
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




	

    </header>
  </meal>
 
  <hr />
<?php endforeach; ?>