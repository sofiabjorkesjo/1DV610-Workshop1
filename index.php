<?php
session_start()
// require_once("words.php");
?>

<html>
<body>

<form action="index.php" method="get">
<?php
	//kollar om displayword finns, annars är displayword tom
	$_SESSION["displayWord"] = isset($_SESSION["displayWord"]) ? $_SESSION["displayWord"] : "_____";

	$correctWord = "SNAKE";
	$displayWord = "_____";

	$guessedLetter = $_GET["letter"];

	if (isset($guessedLetter)) {
		if(in_array($guessedLetter, $_SESSION["letters"])) {
			echo "<p>Du har redan gissat på den " . $guessedLetter . "</p>";
		} else {
			// Spara den gissade bokstaven i en array
			$guessedLetters = array($guessedLetter);
			
			// Hämta tidigare gissade bokstäver
			if (isset($_SESSION["letters"])) {
				$guessedLetters = array_merge($guessedLetters, $_SESSION["letters"]);
			}

			echo "Du har gissat på " . implode(", ", $guessedLetters);

			// spara alla gissade bokstäver
			$_SESSION["letters"] = $guessedLetters;

			echo "<p>Du gissade på " . $guessedLetter . "</p>";
			
			//kollar om den gissade bokstäven finns i det korrekta ordet
			for($i = 0; $i < strlen($correctWord); $i++){
				if($correctWord[$i] == $guessedLetter){
					$_SESSION["displayWord"][$i] = $guessedLetter;
				}
			}
		}
	}

	//när ordet är rätt vinner man
	if ($correctWord == $_SESSION["displayWord"]) {
		echo "<p>Du vann!</p>";
	}

	echo "<p>" . $_SESSION["displayWord"] . "</p>";

	//skriver ut alla bokstäver som knappar
	$arr = range("A", "Z");
	echo "<input type=\"submit\" name=\"letter\" value=\"";
	echo implode("\"><input type=\"submit\" name=\"letter\"value=\"",$arr);

	//fixa nu: lägg in bilderna och gör klasser
?>
</form>

</body>
</html>
