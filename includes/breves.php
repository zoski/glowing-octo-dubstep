<?php
	/* Connexion à la base de donnée*/
	include 'includes/mysql.php';
	
	/* Récupération les information des billets*/
	$billets = $bdd->query('SELECT * FROM breves');
	
	/* Affichage */
	while ($fetched = $billets->fetch()){
		try {
?>
		<!-----------------------Début d'une brève----------------------->
		<article>
		
			
			<h1 id="titre_billet">
				<?php echo $fetched['titre'];?>
			</h1>
		
			<?php if($fetched['src_image']) { ?>
			<!--Si il y a une image on affiche sinon rien-->
				<img src="<?php echo htmlspecialchars($fetched['src_image']);?>" alt="<?php echo htmlspecialchars($fetched['alt_image']);?>" />	
			<?php
			}
			?>

			<!--Date-->
			<div id="date">Posté le : 
				<?php echo nl2br(htmlspecialchars($fetched['date']));?>
			</div>

			<!--Contenu = texte-->
			<div id="contenu">
				<?php echo nl2br(htmlspecialchars($fetched['contenu']));?>
			</div>
		</article>
		<!-----------------------Fin d'une brève----------------------->		
		<?php
		}
		catch (Exception $e){
			die('Erreur : ' . $e->getMessage());
		}
	}
?>

