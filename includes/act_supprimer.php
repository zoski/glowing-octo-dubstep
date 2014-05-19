		<?php 
			include './header.php';
		?>
		<link rel="stylesheet" href="../normalize.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../style.css" type="text/css" media="screen" title="Mon style"/>
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
		<title>Brève supprimé</title>
	</head>
	<body>
		<div id='page_title'>Administration</div>
    	
    	<?php 
    		include './mysql.php';
			$id=$_POST['id'];
    		try {
    			$req = $bdd->query("DELETE FROM breves WHERE id=$id");
    		}
    		catch (Exception $e) {
    			die('Erreur : ' .$e->getMessage());
    		}
    	?>
    		<p>Brève bien supprimé !</p>
    		<a href="../admin.php">Retour à l'administration </a>
 		
 		<?php include './footer.php' ?>
