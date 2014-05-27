<?php include './mysql.php';
	/* Date de maintenant */	
	$laDate = date_create();
	date_timestamp_get($laDate);
	$now=date_format($laDate, 'Y-m-d H:i:s');
	
	try {/* Insersion avec un requete préparée */
		$req = $bdd->prepare('INSERT INTO breves(id, titre, contenu, src_image, alt_image, date) VALUES(:id, :titre, :contenu, :src_image, :alt_image, :date)');
		$req->execute(array(
			'id' =>'',
			'titre' => $_POST['titre'],
			'contenu' => $_POST['contenu'], 
			'src_image' => $_POST['src_image'],
			'alt_image' => $_POST['alt_image'],
			'date' => $now,
		));
	}
	catch (Exception $e) {
	    die('Erreur : ' . $e->getMessage());
	}
	header('Location: ../admin.php');
?>
