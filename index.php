<?php
session_start()
// require_once("words.php");
?>

<html>
<body>

<form action="index.php" method="get">
<?php
	var_dump($_SESSION);

	if (isset($_GET["test"])) {
		if( $_GET["test"] ) {

			// Spara den gissade bokstaven i en array
			$guessedLetters = array($_GET["test"]);
			// Hämta tidigare gissade bokstäver
			if (isset($_SESSION["letters"])) {
				$guessedLetters = array_merge($guessedLetters, $_SESSION["letters"]);
			}
			// spara alla gissade bokstäver
			$_SESSION["letters"] = $guessedLetters;

			// echo implode("", $guessedLetters);
			echo '<br />The ' . $_GET['test'] . ' submit button was pressed<br />';
		}
	}

	$arr = range('A', 'Z');
	echo "<input type=\"submit\" name=\"test\" value=\"";
	echo implode("\"><input type=\"submit\" name=\"test\"value=\"",$arr);

    if($guessedLetters == $random_keys)
{
    //g
}
?>
</form>

</body>
</html>