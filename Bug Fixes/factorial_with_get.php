<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Function Testing</title>
</head>
<body>
<?php
	include ("mathfunctions.php");
?>
<h1>Creating Web Applications - Lab08</h1>
<?php
	if(isset($_GET["number"])) {
		$num = $_GET["number"];
		if(isPositiveInteger($num)) {
			if (isPositiveInteger($num)) {
				echo "<p>", $num, "! is ", factorial ($num), ".</p>";
			} else {
				echo "<p>Please enter a postitive integer.</p>";
			}
		}
	}
	echo "<p><a href='factorial.html'>Return to the Entry Page</a></p>";

?>
</body>
</html>