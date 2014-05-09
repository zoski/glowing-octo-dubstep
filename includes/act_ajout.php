		<?php 
			include 'includes/header.php';
		?>
		
		<title>Page ajouté</title>
	</head>
	<body>
		<div id='page_title'>Administration</div>
    	
    	<?php 
    		include 'includes/navbar.php';
    	 	include 'includes/mysql.php';
		/* Insersion avec un requete préparée */
    		$req = $bdd->prepare('INSERT INTO breves(id, titre, contenu, image, src_image, alt_image, date) VALUES(:id, :titre, :contenu, :image, :src_image, :alt_image, :date)');
    		$req->execute(array(
    			'',
    			$_POST['titre'],
    			$_POST['contenu'], 
    			$_POST['image'], 
    			$_POST['src_image'],
    			$_POST['alt_image'],
    			'',
    		));
    		
    		echo 'Brève bien ajouté';
		?>
