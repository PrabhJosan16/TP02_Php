<?php $titre = 'Restauration - À propos'; ?>


<ul>
   <h1>Qui sommes nous?</h1>
			
		<h3>Je suis Prabhjot Singh Josan</h3>
		<h3>420-4A4 MO Web et Bases de données</h3>
		<h3>Hiver 2020, Collège Montmorency</h3>
</ul>
<h3>Restauration</h3>
<ul>
    <li>L'application "Restauration" permet d' ajouter, modifier et de
        supprimer des plats (meals) et des client (Customers).</li>
				<li>L'application est faites par un modele Cadricel.
		</li>
    <li>La page d'Accueil présente la liste des plats avec leurs prix, et les détails
		</li>
		  <li>La page d'Accueil présente aussi des liens pour afficher (supprimer et modifier) un client et ajouter un:
		</li>

    <ul>
        <li>Cette version offre  la l'addition, modification et supression de deux tables. Il
            y a deux tables (meals et Customer)  pour l'instant. <br>
        </li>
    </ul>
    <li>On y retrouve un lien pour ajouter un nouvel meal, ajouter un nouveau client et afficher un client :</li>
    <ul>
        <li>La page de création d'un meal offre le prix, le nom du plat et les détails <br>
        </li>
		<li>La page de création d'un client offre le nom et la méthode de contacter le client <br>
        </li>
		<li>La page pour afficher un client offre la suppresion et la modification d'un client <br>
        </li>
    </ul>
 
    <ul>
        
        <li>On peut supprimer un plat et un client après confirmation.</li>
        <li>On peut modifier un plat et un client après confirmation.<br>
        </li>
    </ul>
	<li>Si un utilisateur est en session (mot de passe: (admin/admin) et (prabh/prabh) : </li>

	 <ul>
        <li>on retrouve un lien pour créer un nouvel Meal :
            <ul>
               
                <li>
                   Le meal crée peuvent être modifier et supprimer.
                </li>
            </ul>
        </li>
        <li>
            les fonctions Supprimer et Modifier sont possible.
        </li>
    </ul>
    <li>Les client du restaurant peuvent ajouter un Customer et un Meal, mais pas suppimer ou modifier<br>
    </li>
	<li>Le nom du administrateur est afficher<br>
    </li>
	<ul>
        <li>Lien vers Mon gitHub: </li>
        <a href="https://github.com/PrabhJosan16/TP02_Php"> Lien GitHub</a>

    </ul>
</ul>
<br>

<table>
    <tr>
        <td>
            <h4>Base de données utilisée par l'application :</h4>
            <object data="Contenu/images/model_a_jour.png" type="image/svg+xml" height="500" width="800">
                <img src="Contenu/images/model_phpMyAd.png" alt=""/>
            </object><br/>
        </td>
    </tr>
    <tr>
        <td>
            <h4>Basé sur ce modèle original :</h4>
            <a href="http://www.databaseanswers.org/data_models/restaurants_and_customers/index.htm" >
                <img src="Contenu/images/data_model.gif" alt=""/><br/>
                Data Model for Restaurants and Customers:</a>
        </td>
    </tr>
</table>
