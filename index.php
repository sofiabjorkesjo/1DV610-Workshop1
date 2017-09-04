


<html>
<body>

<form action="index.php" method="get">
<?php
	if( $_GET["test"] ) {
		echo '<br />The ' . $_GET['test'] . ' submit button was pressed<br />';
	}

	$arr = range('A', 'Z');
	echo "<input type=\"submit\" name=\"test\" value=\"";
	echo implode("\"><input type=\"submit\" name=\"test\"value=\"",$arr);

?>
</form>

</body>
</html>