<?php
$serie1 = "Games of Throne";
$serie2 = "Big Bang Theory";

$fact1 = "Winter's coming!";
$fact2 = "Bazinga !";
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
            <?php echo "<em>$fact1</em> vient de la serie <strong>$serie1</strong></br><em>$fact2</em> vient de <strong>$serie2</strong>" ; ?>
           <p>Afficher l'ensemble des variables inclues dans ce fichier en une seule ligne PHP sur le modèle suivant :</p>
           <p><em>$fact1</em> provient de <strong>$serie1</strong>, <em>$fact2</em> provient de <strong>$serie2</strong></p>
            </div>

            <hr>

            <footer>
                <p>&copy; PHP - Exercice 2 - Affichage dynamique et concaténation !</p>
            </footer>

        </div> <!-- /container -->

    </body>
</html>
