<?php
	require_once("hitcounter.php");
	$Counter = new HitCounter();
	$Counter->startOver();
	$Counter->closeConnection();

	echo "<h1>Hit Counter</h1>";
	echo "<p>Count set to 0,</p>";
	echo "<a href='countvisits.php'>Click to go back</a>";
	
?>
