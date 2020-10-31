<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Using PHP Variables, arrays and operators</title>
</head>
<body>
	<h1>Creating Web Applications - Lab08</h1>
<?php
	$days = array(
		"Sunday",
		"Monday",
		"Tuesday",
		"Wednesday",
		"Thursday",
		"Friday",
		"Saturday"
		);
	echo "<p>The days of the week in English are: </p>" ;

	echo "<p>";
	for ($i = 0; $i < 7; $i++)
	{
		echo "$days[$i], ";
	}
	".</p>";

	$days[0] = "Dimanche";
	$days[1] = "Lundi";
	$days[2] = "Mardi";
	$days[3] = "Mercredi";
	$days[4] = "Jeudi";
	$days[5] = "Vendredi";
	$days[6] = "Samedi";

	echo "<p>The days of the week in French are: </p>" ;

	echo "<p>";
	for ($i = 0; $i < 7; $i++)
	{
		echo "$days[$i], ";
	}
	".</p>";

?>

</body>
</html>