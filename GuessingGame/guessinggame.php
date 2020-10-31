<?php
	session_start(); 
	if (!isset ($_SESSION["number"])) { 
		$_SESSION["number"] = rand(1, 100);
		$_SESSION["guess"] = 0;
	} 
	$num = $_SESSION["number"];
	$guesses = $_SESSION["guess"];

?>

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
	<p>Enter a number between 1 and 100,</p>
	<p>then press the Guess button</p>
	<br>
	<form action="guessinggame.php" method="get">
		<input type="number" name="guessnum">
		<button type="submit">Submit</button>
	</form>
	
	<?php 
		if (isset($_GET["guessnum"])) {
			if (is_numeric($_GET["guessnum"]) && ($_GET["guessnum"] <= 100) && ($_GET["guessnum"] >= 1)) {
				
				$guesses = $_SESSION["guess"];
				$guesses++;
				$_SESSION["guess"] = $guesses;
				echo "<p>Number of guesses: ", $guesses, "</p>"; 

				$temp = $_GET["guessnum"];
				if ($temp < $num) {
					echo "<p>go higher!</p>";
				}
				if ($temp > $num) {
					echo "<p>go lower!</p>";
				}
				if ($temp == $num) {
					echo "<p>congrats! you got it!<p>";
				}

			} else {
				echo "<p>Please enter a number between 1 - 100</p>";
			}
		}


	?>
	<p><a href="giveup.php">Give Up</a></p>
	<p><a href="startover.php">Start Over</a></p> 

</body>
</html>