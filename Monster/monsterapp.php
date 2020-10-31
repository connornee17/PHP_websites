<!DOCTYPE html> 
<html lang="en"> 
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Web application development" /> 
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Your Name" />
	<title>TITLE</title> 
</head>
<body>
	<h1>Web Programming – Lab10</h1> 

	<?php

		require_once ("monsterclass.php");

		$monster1 = new Monster("1", "red");
	
		$monster2 = new Monster("3", "blue");

		

		echo "<p>", $monster1->describe(),"</p>";
		echo "<p>", $monster2->describe(),"</p>"; 
	?> 
	
</body>
</html>