


<?php $titre = 'Restauration'; ?>

<?php ob_start(); ?>

<a href="index.php?action=nouvelMeal" >
    <h2 class="titreArticle">Ajouter un Meal</h2>
</a>

<?php foreach ($meals as $meal): ?>
  <meal>
    <header>
      <a href="<?= "index.php?action=meal&id=" . $meal['detail'] ?>">
        <h1 class="titreBillet"><?= $meal['detail'] ?></h1>
      </a>
      <time><?= $meal['date'] ?></time>
    </header>
  </meal>
  <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>


