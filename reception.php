<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Réception de données de formulaires</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>
	<!-- METHODE POST -->
	<div>
		<div>Variables reçues par la méthode POST :</div>
		<?php
		foreach ($_POST as $key => $value) {
			print("<div>$key</div>");
			print("<div>$value</div>");
		}
		?>
	</div>
</body>

</html>