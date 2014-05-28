<?php include 'includes/header.php' ?>
    <title>Administration</title>
</head>

<body> 
    <?php 
        $laCdt = isset($_SESSION['connected']) || ((isset($_POST['password']) AND $_POST['password']=="prout") && (isset($_POST['pseudo']) AND $_POST['pseudo']=="zoski"));
        
    if($laCdt==TRUE) { //On c'est deja connecté ou le couple mdp pseudo est OK ?>
    <div id='page_title'>Administration</div>
    <nav>
        <li><a id="nav" href="./">Retour au site</a></li>~
        <li><a href='deconnexion.php'>Déconnexion</a></li>
    </nav>
    <?php
        $_SESSION['connected']=TRUE; //on passe quelque chose dans la variable de session
        include 'includes/admin_panel.php';
    } else { //On ne c'est jamais connecté ou le mdp est faux ?>
        <div id='page_title'>Connexion</div>
    <?php include 'includes/connexion_form.php';
        }
        include 'includes/footer.php' ?>
