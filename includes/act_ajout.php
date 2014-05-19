		<?php 
			include './header.php';
		?>
		<link rel="stylesheet" href="../normalize.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../style.css" type="text/css" media="screen" title="Mon style"/>
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
		
		<title>Page ajouté</title>
	</head>
	<body>
		<div id='page_title'>Administration</div>
    	
    	<?php 
    		include './mysql.php';
    		
    	/* Date de maintenant */	
    		$laDate = date_create();
			date_timestamp_get($laDate);
			$now=date_format($laDate, 'Y-m-d H:i:s');
    		
		/* Insersion avec un requete préparée */
		try {
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
		?>
		<p>Brève bien ajouté !</p>
    	<a href="../admin.php">Retour à l'administration </a>
    	
		<?php include './footer.php' ?>
