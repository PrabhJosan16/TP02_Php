<?php $this->titre  = 'Restauration'; ?>

<a href="index.php?action=nouvelMeal" >
    <h2 class="titreArticle">Ajouter un Meal</h2>
</a>

<?php foreach ($meals as $meal): 
	?>
	
  <meal>
    <header>
      <a /*href="<?= "index.php?action=meal&meal_id=" . $meal['meal_id'] ?>*/">
        <h1 class="titreArticle"><?= $meal['detail'] ?></h1>
      </a>
      <time><?= $meal['date'] ?></time>
	   <p><?= $meal['description'] ?></p>
    <p><?= $meal['prix'] ?></p>


	<p><a href="index.php?action=confirmer&meal_id=<?= $meal['meal_id'] ?>" >
        [Supprimer]
    </a>
	<p><a href="index.php?action=confirmerModifier&meal_id=<?= $meal['meal_id'] ?>" >
        [Modifier]
    </a>
    </header>
  </meal>
 
  <hr />
<?php endforeach; ?>