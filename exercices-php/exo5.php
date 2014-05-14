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
            	<h1>Assemblage ;)</h1>
				<p>A l'aide de la fonction appropriée, insérez dans la balise &lt;div&gt; ayant comme class <strong><em>"row"</em></strong> les fichiers suivants :</p>
				
				<ul>
					<li>bbt.php</li>
					<li>got.php</li>
					<li>rrlol.php</li>
				</ul>
				
				<p><em>vous trouverez les fichiers ci-dessus dans le dossier <strong>assemblage</strong></em></p>
				
            </div>

			<div class="row">
				<?php 
					include 'assemblage/bbt/bbt.php';
					include 'assemblage/got/got.php';
					include 'assemblage/rr/lol/rrlol.php';				
				?>
			</div> <!-- /row -->
            <hr>

            <footer>
                <p>&copy; PHP - Exercice 5 - Assembler des fichiers PHP !</p>
            </footer>

        </div> <!-- /container -->

    </body>
</html>
