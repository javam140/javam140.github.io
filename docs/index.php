<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>strona</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Twojstary generator</h1>
		<form method="post">
			<input type="submit" name="generate" value="generuj">
			<input type="submit" name="czysc" value="czysc">
			
		</form>
		<?php
		if (array_key_exists('generate', $_POST)) {
			przycisk1();
		}
		function przycisk1() {
			$numer = rand(1, 5);
			if ($numer == 1) {
				$tekst = "Twoj stary pijany";
			}
			if ($numer == 2) {
				$tekst = "Twoj stary jebie szlugiem";
			}
			if ($numer == 3) {
				$tekst = "Twój stary to rower";
			}
			if ($numer == 4) {
				$tekst = "Twój stary pracuje jako stojak na rowery pod Castorama";
			}
			if ($numer == 5) {
				$tekst = "Twój stary ma hulajnoge na gaz";
			}
			echo $tekst;
		}
		if(array_key_exists('czysc', $_POST)) {
			przycisk2();
		}
		function przycisk2() {
			echo "<p>&nbsp;</p>";
		}
		?>
	</body>
</html>