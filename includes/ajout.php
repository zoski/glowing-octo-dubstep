<form method="post" action="includes/act_ajout.php">
	<fieldset>
	<legend>Brève</legend>
		<table id="post">
			<tr><!-- Ligne -->
				<td>Titre</td>
				<td><input name="titre" type="text"></td>
				
			</tr>
			<tr>
				<td>Contenu</td>
				<td><textarea name="contenu" rows="10" cols="70"></textarea></td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
		<legend>Image d'illustration</legend>
		<table id="post">
			<tr>
				<td>Nom fichier</td>
				<td><input name="src_image" type="text"> <em>Ex : img/monSuperFichier.png </em></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input name="alt_image" type="text"></td>
			</tr>
		</table>
	</fieldset>
	<input value="Envoyer" type="submit" id="button">
</form>
