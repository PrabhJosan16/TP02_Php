<?php $this->titre  = 'Restauration - Supprimer'; ?>

<customer>
    <header>
        <p><h1>
            Supprimer?
        </h1>
			 
        <?= $customer['Customer_Details'] ?> <br/>
        <strong><?= $customer['contact'] ?></strong><br/>
      
        </p>
    </header>
</customer>

<form action="AdminCustomer/supprimer" method="post">
	 <input type="hidden" name="Customer_ID" value="<?= $this->nettoyer($customer['Customer_ID']) ?>" /><br />
    <input type="submit" value="Oui" />
</form>
<form action="AdminCustomer/afficherClient" method="post">
		<p>
		<input type="submit" value="Annuler" />
		</p>
</form>


