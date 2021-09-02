<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="styleT2.css"/> 
		<title>Tome2</title>
	</head>
    <body>
		<h1>Tome 2</h1>
		<h2>Ajout d'un livre dans la base de données</h2>
		<form action="ajoutlivre.php" method="post">
			<p><label for="ajout_isbn"> ISBN : <input type="text" id="ajout_isbn" name="ajout_isbn"/></p>
			<p><label for="etat"> Etat du livre : </br></label>
				<select name="etat" id="etat">
					<option value="TB"> Très bon état</option>
					<option value="B"> Bon état</option>
					<option value="C">Etat correct</option>
				</select>
		</form>

		<h2>Mise à jour base de données Tome2</h2>
		<a href="majbddt2.php">Mise à jour générale base de données T2</a>

		<?php include "form_isbn.php"; ?> 
    </body>
</html>