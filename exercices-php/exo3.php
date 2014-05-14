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
            <h1>Vous êtes un espion!</h1>
<p>Dans la documentation de <a href="http://php.net">PHP</a>, trouvez un moyen d'afficher sur cette page, <strong>le numéro de version de PHP</strong>, <strong>le nom du système d'exploitation</strong> de votre serveur ainsi que <strong>la langue du navigateur</strong> du poste client.</p>
			<?php 
				echo 'Version PHP courante : ' . phpversion(); 
				echo "</br> L'os est un :  ".PHP_OS;
				echo '</br> La langue du navigateur est : ' .$_SERVER['HTTP_ACCEPT_LANGUAGE'];
			?>
            
            </div>

            <hr>

            <footer>
                <p>&copy; PHP - Exercice 3 - Données du serveur !</p>
            </footer>

        </div> <!-- /container -->

    </body>
</html>
