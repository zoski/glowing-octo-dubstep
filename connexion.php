<?php 
    session_start();
    include 'includes/header.php' ?>
		<title>Connexion</title>
		
		<?php
    	    if(isset($_SESSION['id'])) { ?>
    	    <meta http-equiv="refresh" content="5; URL=admin.php">
    	<?php}?>
		
    </head>
    
    
    <body>   	
    	<div id='page_title'>Connexion</div>
    	<a href="./">Retour au site</a>
    	
    	 
    	<?php include 'includes/connexion_form.php' ?>1
    
    	<?php include 'includes/footer.php' ?>
