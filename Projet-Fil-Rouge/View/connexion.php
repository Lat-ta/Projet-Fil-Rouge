<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body id="bdy">
	<div id="bloc_page">



	<div id="banni�re">
			<div id="banni�re_description">
			<b>Bienvenue sur le site troc de temps! </b>
			</div>		
	    </div>
	
	<p>Connectez vous</p>
	<form method="POST" action="../Controller/ClientController.php">
		<table>
		<tr>
		<td>Login</td>
		<td><input type="text" id="txtLogin" name="txtLogin" required="required"></td>
		</tr>
		<tr>
		<td>Mot de passe</td>
		<td><input type="text" id="txtMdp" name="txtMdp" required="required"></td>
		</tr>
		</table>
		<input type="submit" value=Valider>
	</form>

	</div>
</body>
</html>