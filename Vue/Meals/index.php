<?php $this->titre  = 'Restauration'; ?>





<a href="Meals/afficherClient">
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