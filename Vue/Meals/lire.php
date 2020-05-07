<?php $this->titre = "Restauration - " . $this->nettoyer($meal['titre']); ?>

<meal>
    <header>
      <a /*href="<?= "index.php?action=meal&meal_id=" . $meal['meal_id'] ?>*/">
        <h1 class="titreArticle"><?= $meal['detail'] ?></h1>
      </a>
      <time><?= $meal['date'] ?></time>
	   <p><?= $meal['description'] ?></p>
    <p><?= $meal['prix'] ?></p>
    </header>
  </meal>
<hr />
<header>
    <h1 id="titreReponses">Réponses à <?= $this->nettoyer($meal['titre']) ?> :</h1>
</header>
<?= ($commentaires->rowCount() == 0) ? '<p class="message">Pas encore de commentaires pour cet meal.</p>' : '' ?>
<?php
foreach ($meals as $meal):
    ?>
    <?php if ($commentaire['efface'] == '0') : ?>
        <p><a href="Commentaires/confirmer/<?= $this->nettoyer($commentaire['id']) ?>" >
                [Effacer]</a>
            <?= $this->nettoyer($commentaire['date']) ?>, <?= $this->nettoyer($commentaire['auteur']) ?> dit : (privé? <?= $this->nettoyer($commentaire['prive']) ?>)<br/>
            <strong><?= $this->nettoyer($commentaire['titre']) ?></strong><br/>
            <?= $this->nettoyer($commentaire['texte']) ?>
        </p>
    <?php else : ?>
        <p class="efface"><a href="Commentaires/retablir/<?= $this->nettoyer($commentaire['id']) ?>" >
                [Rétablir]</a>
            Commentaire du <?= $this->nettoyer($commentaire['date']) ?>, par <?= $this->nettoyer($commentaire['auteur']) ?> effacé! (privé? <?= $this->nettoyer($commentaire['prive']) ?>)
        </p>
    <?php endif; ?>
<?php endforeach; ?>

<form action="Commentaires/ajouter" method="post">
    <h2>Ajouter un commentaire</h2>
    <p>
        <label for="auteur">Courriel de l'auteur (xxx@yyy.zz)</label> : <input type="text" name="auteur" id="auteur" /> 
        <?= ($erreur == 'courriel') ? '<span class="erreur">Entrez un courriel valide s.v.p.</span>' : '' ?> 
        <br />
        <label for="texte">Titre</label> :  <input type="text" name="titre" id="titre" /><br />
        <label for="texte">Commentaire</label> :  <textarea type="text" name="texte" id="texte" >Écrivez votre commentaire ici</textarea><br />
        <input type="hidden" name="prive" value="0" />
        <label for="prive">Privé?</label><input type="checkbox" name="prive" />
        <input type="hidden" name="article_id" value="<?= $this->nettoyer($meal['id']) ?>" /><br />
        <input type="submit" value="Envoyer" />
    </p>
</form>


