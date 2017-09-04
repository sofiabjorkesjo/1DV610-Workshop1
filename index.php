
<?php
require_once("words.php");
?>

<html>
<body>

<form action="index.php" method="get">
<?php

	if (isset($_GET["test"])) {
		if( $_GET["test"] ) {

			$guessedLetters = array($_GET["test"]);
			array_push($guessedLetters, $_GET["test"]);
			echo implode("", $guessedLetters);
			echo '<br />The ' . $_GET['test'] . ' submit button was pressed<br />';
		}
	}

	$arr = range('A', 'Z');
	echo "<input type=\"submit\" name=\"test\" value=\"";
	echo implode("\"><input type=\"submit\" name=\"test\"value=\"",$arr);

?>
</form>

</body>
</html>