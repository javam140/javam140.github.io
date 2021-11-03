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
			$numer = rand(1, 20);
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
			if ($numer == 6) {				$tekst = "Twój stary bombardował Drezno";			}

			if ($numer == 7) {				$tekst = "Twój stary ruszył na Smoleńsk";			}

			if ($numer == 8) {				$tekst = "Twój stary okrada bezdomnych";			}

			if ($numer == 9) {				$tekst = "Hokus pokus, czary mary, Tinky Winky to twój stary";			}

			if ($numer == 10) {				$tekst = "Twój stary słucha płyt chodnikowych";			}

			if ($numer == 11) {				$tekst = "Twój stary leci w kulki";			}

			if ($numer == 12) {				$tekst = "Twój stary słodzi cukier";			}

			if ($numer == 13) {				$tekst = "Twój stary przegrał z Najmanem";			}

			if ($numer == 14) {				$tekst = "Twoj stary to kaloryfer";			}

			if ($numer == 15) {				$tekst = "Twój stary górnik";			}

			if ($numer == 16) {				$tekst = "Twój stary nazista";			}

			if ($numer == 17) {				$tekst = "Twój stary otwiera się w nowym oknie";			}

			if ($numer == 18) {				$tekst = "Twój stary to cyklop";			}

			if ($numer == 19) {				$tekst = "Twój stary pije benzyne";			}

			if ($numer == 20) {				$tekst = "Twój stary jest serwisantem harnasia";			}
			echo $tekst;
		}
		if(array_key_exists('czysc', $_POST)) {
			przycisk2();
		}
		function przycisk2() {
			echo "<p>&nbsp;</p>";
		}
		?>
		<h1>Twojastara generator</h1>
		<form method="post">
			<input type="submit" name="twojastara" value="Generuj">
			<input type="submit" name="czysto" value="czysc">
		</form>
		<?php
			if (array_key_exists('twojastara', $_POST)) {
				twojastara();
			}
			function twojastara() {
				$numer = rand(1, 32);
				if ($numer == 1) {
					$tekst = "Twoja stara jest tak gruba że spada z łóżka z dwóch stron";
				}
				if ($numer == 2) {
					$tekst = "Twoja stara kradnie dziki";
				}
				if ($numer == 3) {
					$tekst = "Twoja stara jest tak gruba że zakłada pasek bumerangiem";
				}
				if ($numer == 4) {
					$tekst = "Twoja stara wącha klej";
				}
				if ($numer == 5) {
					$tekst = "Twoja stara wisi w szafie";
				}
				if ($numer == 6) {
					$tekst = "Twoja stara gasi swiatlo w lodowce";
				}
				if ($numer == 7) {
					$tekst = "Twoja stara leci w kulki";
				}
				if ($numer == 8) {
					$tekst = "Twoja stara przeszla nfs na pieszo";
				}
				if ($numer == 9) {
					$tekst = "Twoja stara przeszla simsy";
				}
				if ($numer == 10) {
					$tekst = "Twoja stara to twoj wujek";
				}
				if ($numer == 11) {
					$tekst = "Twoja stara ma grype w kolanie";
				}
				if ($numer == 12) {
					$tekst = "Twoja stara jebie szlugiem";
				}
				if ($numer == 13) {
					$tekst = "Twoja stara wali wiadro";
				}
				if ($numer == 14) {
					$tekst = "Twoja stara ale jara";
				}
				if ($numer == 15) {
					$tekst = "Twoja stara skacze na prostych nogach";
				}
				if ($numer == 16) {
					$tekst = "Twoja stara siedzi na wycieraczce i drapie w drzwi";
				}
				if ($numer == 17) {
					$tekst = "Twoja stara smaży śnieg na obiad";
				}

				if ($numer == 18) {
					$tekst = "Twoja stara kradnie prąd.";
				}

				if ($numer == 19) {
					$tekst = "Twoja stara mija sie z celem.";
				}

				if ($numer == 20) {
					$tekst = "Twoja stara wygina śmiało ciało";
				}


				if ($numer == 21) {
					$tekst = "Dwie twoje stare i spokój";
				}

				if ($numer == 22) {
					$tekst = "Twoja stara śpiewa techno";
				}

				if ($numer == 23) {
					$tekst = "Twoja stara jeździ windą po lesie";
				}

				if ($numer == 24) {
					$tekst = "Polakom gratulujemy twojej starej";
				}

				if ($numer == 25) {
					$tekst = "Twoja stara chodzi pieszo do McDrive'a";
				}

				if ($numer == 26) {
					$tekst = "Twoja stara ma stragan na Allegro";
				}

				if ($numer == 27) {
					$tekst = "Twoja stara leczy się u dr Oetkera";
				}


				if ($numer == 28) {
					$tekst = "Twoją stara zlapali do Pokeballa";
				}

				if ($numer == 29) {
					$tekst = "Twoja stara wrzuca 5-tke w maluchu";
				}


				if ($numer == 30) {
					$tekst = "Twoja stara ogląda TVN na Polsacie.";
				}


				if ($numer == 31) {
					$tekst = "Twoja stara to przechodzeń w GTA San Andreas";
				}


				if ($numer == 32) {
					$tekst = "© Copyright by Twoja stara.";
				}
				echo $tekst;
				
			}
			if (array_key_exists('czysto', $_POST)) {
					czysc2();
				}
			function czysc2() {
				echo "<p>&nbsp;</p>";
			}
		?>
		<div class="copyright">
		© Copyright by Twoja stara.
		</div>
	</body>
</html>