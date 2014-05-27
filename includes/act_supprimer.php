<?php 
	include './mysql.php';
	$id=$_POST['id'];
	try {
		$req = $bdd->query("DELETE FROM breves WHERE id=$id");
	}
	catch (Exception $e) {
		die('Erreur : ' .$e->getMessage());
	}
    header('Location: ../admin.php');
?>
