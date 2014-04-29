		<?php /* Insersion avec un requete préparée */
    		$req = $bdd->prepare('INSERT INTO breves(id, titre, contenu, image, src_image, alt_image, date) VALUES(:id, :titre, :contenu, :image, :src_image, :alt_image, :date)');
    		$req->execute(array(
    			'id' => ,
    			'titre' => $titre,
    			'contenu' => $contenu, 
    			'image' => $image, 
    			'src_image' => $src_image,
    			'alt_image' => $alt_image,
    			'date' => $date,
    		));
    		
    		echo 'Brève bien ajouté';
		?>
