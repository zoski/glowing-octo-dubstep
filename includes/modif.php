<?php
	/* Connexion à la base de donnée*/
	include 'includes/mysql.php';
	
	/* Récupération les information des billets*/
	$billets = $bdd->query('SELECT * FROM breves');
	
	/* Affichage */
?>
	<table id="modif">
		<tr>
			<td>id</td>
			<td>Titre</td>
			<td>image</td>
			<td>Options</td>
		</tr>
<?php
	while ($fetched = $billets->fetch()){
		try {
?>
		<tr>
			<td><?php echo $fetched['id'];?></td>
			<td><?php echo $fetched['titre'];?></td>
			<td>
				<?php 
					if($fetched['src_image']) { 
						echo $fetched['src_image'];
					} else {
						echo "Pas d'images.";
					}
				?>
			</td>
			<td><input value="Supprimer" type="submit" id="button"> | <input value="Modifier" type="submit" id="button"></td>
		</tr>					
<?php
			}
		catch (Exception $e){
			die('Erreur : ' . $e->getMessage());
		}
	}
echo "</table>";
?>
