try {
		$bdd = new PDO('mysql:host=localhost;dbname=tpnote', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

