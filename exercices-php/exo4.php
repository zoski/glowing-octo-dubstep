<?php 
$mon_tableau = array( 
'Artiste' => 'Daft Punk',
'Album' => 'Random Access Memories',
'Sortie' => '2013'
)
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
            
            <h1>Electro Tab !</h1>
<p>Afficher l'ensemble des données contenues dans le tableau associatif <strong>$mon_tableau</strong> inclus dans ce fichier.</p>
            
            <?php 
		        foreach ($mon_tableau as $key => $value)
		        {
		        	echo "$key : $value</br>";
		        } ;
		     ?>
            </div>

            <hr>

            <footer>
                <p>&copy; PHP - Exercice 4 - affichage & tableau associatif !</p>
            </footer>

        </div> <!-- /container -->

    </body>
</html>
