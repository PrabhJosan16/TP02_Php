<?php $titre = "Restauration - " . $meals['detail']; ?>

<?php ob_start(); ?>
<article>
  <header>
    <h1 class="titreBillet"><?= $meals['detail'] ?></h1>
    <time><?= $meals['date'] ?></time>
  </header>
  <p><?= $meals['prix'] ?></p>
</article>
<hr />
<header>
  <h1 id="titreReponses">Réponses à <?= $meals['titre'] ?></h1>
</header>
<?php foreach ($dishes as $dishe): ?>
  <p><?= $dishe['item_id'] ?> dit :</p>
  <p><?= $dishe['quantite'] ?></p>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>