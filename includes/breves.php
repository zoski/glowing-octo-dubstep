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
	$billets = $bdd->query('SELECT * FROM billets');
	
	/* Affichage */
	while ($fetched = $billets->fetch()){
		try {
			$source_img = "img/".$fetched['src_image'];
			
			echo "<article>";
			
			echo '<h1 id="titre_billet">'.$fetched['titre'].'</h1>';
			/* Photos */
			if($fetched['image']) { 
				echo "<img src=".$source_img." alt=".$fetched["alt_image"]."/>";
				
			}
			/* Date */
			echo "<div id="."date".">Posté le ".$fetched['date']."</div>";
			/* Contenu */
			echo '<div id="contenu">'.$fetched['contenu'].'</div>';
			
			
			
			echo "</article>";
		}
		catch (Exception $e){
			die('Erreur : ' . $e->getMessage());
		}
	}

?>

