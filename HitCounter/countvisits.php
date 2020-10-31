<!DOCTYPE html> 
<html lang="en"> 
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Web application development" /> 
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Your Name" />
	<title>Hit Counter</title> 
</head>
<body>
	<h1>Hit Counter</h1> 

	<?php
		require_once("hitcounter.php");

		$Counter = new HitCounter();
		$Counter->getHits();
		$Counter->setHits();
		$Counter->closeConnection();
	?> 

	<br>
	<br>
	<form action="startover.php" method="post">
		<input type= "submit" value="ENTER"/>
	</form>
	
</body>
</html>