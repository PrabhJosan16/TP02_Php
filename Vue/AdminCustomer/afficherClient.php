<?php $this->titre  = 'Restauration - Client'; ?>



<?php foreach ($customers as $customer): 
	?>
	
  <customer>
    <header>
      <a /*href="<?= "index.php?action=customer&customer_id=" . $customer['Customer_ID'] ?>*/">
        <h1 class="titreArticle"><?= $customer['Customer_Details'] ?></h1>
      </a>
	   <p><?= $customer['contact'] ?></p>



	<p><a href="AdminCustomer/confirmerCustomer/<?= $customer['Customer_ID'] ?>" >
        [Supprimer]
    </a>
	<p><a href="AdminCustomer/modifier/<?= $this->nettoyer($customer['Customer_ID'])?>" >
        [Modifier]
    </a>

	

    </header>
  </customer>
 
  <hr />
<?php endforeach; ?>