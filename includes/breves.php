<?php
	/* Connexion à la base de donnée*/
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=tpnote', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	/* Récupération des information des billets*/
	$billets = $bdd->query('SELECT * FROM breves');
	
	/* Affichage */
	while ($fetched = $billets->fetch()){
		try {
			$source_img = "img/".$fetched['src_image'];	//assemblage du lien de l'image
			
		/*=======================Début d'une brève===================*/
			echo "<article>";
			
			echo '<h1 id="titre_billet">'.$fetched['titre'].'</h1>';

			/* Image */
			if($fetched['image']) {
			/* Si il y a une image on affiche sinon rien */
				echo "<img src=".$source_img." alt=".$fetched["alt_image"]."/>";	
			}

			/* Date */
			echo "<div id="."date".">Posté le ".$fetched['date']."</div>";

			/* Contenu = texte */
			echo '<div id="contenu">'.$fetched['contenu'].'</div>';

			echo "</article>";
		/*=======================Fin d'une brève===================*/		
		}
		catch (Exception $e){
			die('Erreur : ' . $e->getMessage());
		}
	}
?>

