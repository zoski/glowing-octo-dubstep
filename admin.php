<?php 
    session_start();
    include 'includes/header.php' ?>
    <title>Administration</title>
</head>

<body>
    <div id='page_title'>Administration</div>
    <a href="./">Retour au site</a>
    <?php if ((isset($_POST['password']) AND $_POST['password']=="prout") && (isset($_POST['pseudo']) AND $_POST['pseudo']=="zoski")) {

    ?> 	    	
    <h1>Ajout Brèves</h1>
    <?php include 'includes/ajout.php' ?>

    <h1>Gestions des Brèves</h1>
    <?php include 'includes/list.php' ?>
    
    <h1>Ajout Création</h1>
   
    <?php 
    } else { ?>
        <p>Mauvais mot de passe.</p>
        <a href="./">Retour au site</a>
    <?php  }
        include 'includes/footer.php' ?>
