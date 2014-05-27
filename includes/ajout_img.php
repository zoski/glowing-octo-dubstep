<form method="post" action="includes/act_ajout_img.php">
<fieldset>
	<legend>Ajouter une image</legend>
	<table id="post">
	    <tr>
	        <td>Image</td>
	        <td><input type="file" name="image"/></td>
	    </tr>
	    <tr>
	        <td>Titre</td>
            <td><input type="text" name="titre"/></td>
         </tr>
         <tr>
	        <td>Descrition</td>
            <td><input type="text" name="alt"/></td>
         </tr>
    </table>
    <input value="Envoyer" type="submit" id="button">
</fieldset>
