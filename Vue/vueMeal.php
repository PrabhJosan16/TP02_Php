<?php $detail = "Le Blogue du prof - " . $meal['detail']; ?>

<?php ob_start(); ?>
<meal>
    <header>
        <h1 class="titreArticle"><?= $meal['detail'] ?></h1>
        <time><?= $meal['date'] ?></time>
        <h3 class=""><?= $meal['prix'] ?></h3>
    </header>
  
</meal>
<hr />
<header>
    <h1 id="titreReponses">Réponses à <?= $meal['id'] ?> :</h1>
</header>


<form action="index.php?action=customer" method="post">
    <h2>Ajouter un customer</h2>
    <p>
        <label for="contact">Courriel du customer (xxx@yyy.zz)</label> : <input type="text" name="contact" id="contact" /> 
        <?= ($erreur == 'courriel') ? '<span style="color : red;">Entrez un courriel valide s.v.p.</span>' : '' ?> 
        <br />
       <label for="	Customer_Details">Nom du customer</label> : <input type="text" name="	Customer_Details" id="	Customer_Details" />
     
        <input type="submit" value="Envoyer" />
    </p>
	
	
</form>

<?php $contenu = ob_get_clean(); ?>

<?php require 'Vue/gabarit.php'; ?>

