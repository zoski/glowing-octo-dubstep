<?php
$local_file = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
?>

<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>


        <div class="container">

            <div class="hero-unit">
            	<h1>Données dans l'URL</h1>
				<p>Insérez le code PHP approprié pour récupérer les données inclues dans l'adresse suivante et les afficher dans la page :</p>
								
				<p>
				<a href="<?php echo $local_file."?artiste=Shaka%20Ponk&titre=Palabre%20Mi%20Amor"; ?>" alt="url avec paramètres">
				<?php echo $local_file."?artiste=Shaka%20Ponk&titre=Palabre%20Mi%20Amor"; 
				?>
				</a>				
				</p>
				
				<?php
					$artiste = $_GET['artiste'];
					$titre = $_GET['titre'];
					echo "$artiste, $titre";
				?>
            </div>

            <hr>

            <footer>
                <p>&copy; PHP - Exercice 6 - Récupérer des données dans l'URL !</p>
            </footer>

        </div> <!-- /container -->

    </body>
</html>
