<?php "Supprimer" ?>
<?php ob_start(); ?>
<meal>
    <header>
        <p><h1>
            Supprimer?
        </h1>
        <?= $meal['date'] ?>, <?= $meal['detail'] ?> <br/>
        <strong><?= $meal['description'] ?></strong><br/>
        <?= $meal['prix'] ?>
        </p>
    </header>
</meal>

<form action="index.php?action=supprimer" method="post">
    <input type="hidden" name="idMeal" value="<?= $meal['meal_id'] ?>" /><br />
    <input type="submit" value="Oui" />
</form>
<form action="index.php" method="get" >
    <input type="hidden" name="action" value="meal" />
    <input type="hidden" name="idMeal" value="<?= $meal['meal_id'] ?>" />
    <input type="submit" value="Annuler" />
</form>
<?php $contenu = ob_get_clean(); ?>

<?php require 'Vue/gabarit.php'; ?>

