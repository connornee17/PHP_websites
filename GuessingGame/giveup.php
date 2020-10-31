<!DOCTYPE html> 
<html lang="en"> 
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Web application development" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Your Name" />
	<title>Guessing Game</title>
</head>
<body>
	<h1>Guessing Game</h1> 
	
	<?php
		session_start();
		$num = $_SESSION["number"];
		echo "<p>The hidden number was: $num</p>";

	?>


	<p><a href="startover.php">Start Over</a></p> 

</body>
</html>