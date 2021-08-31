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
		<h2>Recherche info livre avec code ISBN</h2>
        <form action="infoslivres.php" method="post">
			<p><label for="isbn"> ISBN : <input type="text" id="isbn" name="isbn"/></p>
			<p><input type="submit" value="Envoi"></p>
		</form>
		<h2>Mise à jour base de données Tome2</h2>
		<form action="majbddt2.php" method="post">
			<p><input type="submit" value="MAJ BDD"></p>
		</form>
    </body>
</html>