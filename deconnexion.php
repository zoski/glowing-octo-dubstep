<?php include 'includes/header.php' ?>

    <title>Déconnection</title>
    <meta http-equiv="refresh" content="2; URL=index.php">
</head>
<body>
    <div id='page_title'>Déconnexion</div>
    <?php
         if($_SESSION['connected']=TRUE) {
            session_destroy();
         }
    ?>
    <h2>Bisous à bientôt</h2>
    
    <?php include 'includes/footer.php' ?>
