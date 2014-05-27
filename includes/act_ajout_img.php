<?php 
	include './mysql.php';
	
    header ("Content-type: image/png");
    if ((isset($_FILES['nom_du_fichier']['temp_name'])&&($_FILES['nom_du_fichier']['error'] == UPLOAD_ERR_OK))) {     
        $chemin_destination = '/var/www/fichiers/';     
        move_uploaded_file($_FILES['titre']['tmp_name'], "img/".$_FILES['nom_du_fichier']['name']);

try {/* Insersion avec un requete préparée des info de l'image dans la BDD*/
	$req = $bdd->prepare('INSERT INTO images(id, titre, alt) VALUES(:id, :titre, :alt)');
	$req->execute(array(
		'id' =>'',
		'titre' => $_POST['titre'],
		'alt' => $_POST['alt'], 
	));
	}
catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    header('Location: ../admin.php');
?>
