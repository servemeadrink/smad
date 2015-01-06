<doctype html>

<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="ressources/jquery-2.1.1.min.js"></script>
</head>

<body>
	<a href="index.php?url=deconnexion">Déconnectez-vous</a>
	<h1>La page gestion</h1>
	
	<h3>Ajouter un établissement</h3>
	
	<form name="ajout_etablissement" action="index.php?url=ajout" method="post">
		
		<input type="text" name="e_name" placeholder="Nom de l'établissement" /><br /><br />
		<input type="text" name="e_city" placeholder="Ville de l'établissement" /><br /><br />
		<input type="text" name="e_address" placeholder="Adresse de l'établissement" /><br /><br />
		
		<textarea name="e_descript" placeholder="Description de l'établissement">
		</textarea><br /><br />
		
		<label for="bar">
			<input type="radio" name="e_nature" value="0" id="bar" /> Bar
		</label><br />
		
		<label for="boite">
			<input type="radio" name="e_nature" value="1" id="boite" /> Boite
		</label><br /><br /><br />
		
		<input type="submit" name="ajout_e" id="ajout_e" />
	</form>
	
	<?php debug(); ?>
	
</body>

</html>