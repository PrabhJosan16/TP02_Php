
<?php $titre = "Restauration -" . $meals['detail']; ?>

<?php ob_start(); ?>
 <meal>
    <header>
	<a href="<?= "meal.php?id=" . $meal['id'] ?>">
      <h1 class="titreBillet"><?= $meal['detail'] ?></h1>
      <time><?= $meal['date'] ?></time>
	  </br> Détail de la commande <?= $meal['description'] ?>
    </header>
  </meal>
<hr />
<header>
  <h1 id="titreReponses">Réponses à <?= $meals['detail']] ?></h1>
</header>
<?php foreach ($MealDishes as $MealDishe): ?>
  <p><?= $MealDishe['id'] ?> dit :</p>
  <p><?= $MealDishe['quantite'] ?></p>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>

