<!DOCTYPE html>
<html>
	<head>
	<meta charset="ISO-8859-1">
	<link rel="stylesheet" href="style.css"/>
	<title>Connexion</title>
	<script type="text/javascript" src="../jquery-1.10.2.js"></script>
	<script>
$(document).ready(function()
   {
   
     $('h1').click(function()
       {
        if ($('#contactForm').is(':hidden'))
          {
           $('#contactForm').slideDown('slow');
          }
        else
          {
           $('#contactForm').slideUp('slow');
          }
       });
    });
</script>

<script type="text/javascript">
	
</script>
	</head>
	<body>
	
		<?php include("header.php"); ?>
		<?php include("menu.php"); ?>
		</br></br>
		
		<div id="contactFormContainer">
		
	<h1 id="title">Connectez vous ici</h1>
    
    <form method="POST" action="../Controller/ClientController.php">
		<div id="contactForm">
 		<fieldset>				

			Pseudo : <input  type="text" name="txtPseudo"/>
			Mot de passe : <input  type="password" name="txtPassword"/>
			<input type="submit" value="Valider"/>
			<input type="reset" value="Annuler"/>
			
			
			<a href="../View/inscription.php"><input type="button" value="S'inscrire"/> </a>
			<a href="../View/mdpOublie.php"><input type="button" value="MdpOublie"/> </a>

		</fieldset>
	</div>
	</form>
	
	<form method="POST" action="../Controller/AdminController.php">
		<div id="contactForm">
 		<fieldset>				

			Pseudo : <input  type="text" name="txtPseudo"/>
			Mot de passe : <input  type="password" name="txtPassword"/>
			<input type="submit" value="Valider"/>
			<input type="reset" value="Annuler"/>
			
			
		</fieldset>
	</div>
	</form>
   

    </div>
		
		
		<?php include("footer.php"); ?>
	</body>
</html>