<?php $titre = "Restauration - " . $meals['detail']; ?>

<?php ob_start(); ?>
<meal>
  <header>
    <h1 class="titreBillet"><?= $meals['detail'] ?></h1>
    <time><?= $meals['date'] ?></time>
  </meal>
  <p><?= $meals['prix'] ?></p>
</meal>
<hr />
<header>
  <h1 id="titreReponses">Réponses à <?= $meals['titre'] ?></h1>
</header>
<?php foreach ($meal as $meal): ?>
<p><a href="index.php?action=confirmer&id=<?= $meal['id'] ?>" >
        [Supprimer]
    </a>
    <?= $meal['date'] ?>, <?= $meal['description'] ?> <br/>
        <strong><?= $meal['detail'] ?></strong><br/>
       
    </p>
<?php endforeach; ?>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>



