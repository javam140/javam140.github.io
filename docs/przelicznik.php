<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style5.css">
		<title>Strona</title>
	</head>
	<body>
		<header>
			<h1>Mega bity na megabajty przydatne</h1>
			<form method="post">
				<input type="text" name="dane"> <br>
				<input type="submit" name="submit" value="przelicz">
			</form>
			<?php  
			$liczba = $_POST['dane'];
			$wynik = $liczba / 8.00;
			?>
		</header>
		<section>
			<?php
			echo "$wynik";
			?>
		</section>
	</body>
</html>
