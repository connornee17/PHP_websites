<!DOCTYPE html> 
<html lang="en"> 
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<meta name="description" content="Web Programming :: Lab 2" />
	<meta name="keywords" content="Web,programming" />
	<title>Using variables, arrays and operators</title>
</head>
<body>
	<h1>Web Programming - Lab 2</h1> 
	<?php
		$numbers = array (4, 7, 6.4, 8.9, "hello", 3, 2, "poop");
		
		$numbers[] = $_GET["mynumber"];
		

		function checkNumbers($number) {
			
			if (is_numeric($number) == false) {
				echo "$number is not a number";
				echo "<br>";
			}
			else {
				$maa = round($number);
				if ($maa % 2 == 0) {
					echo "$maa is an even number";
					echo "<br>";
				}
				else {
					echo "$maa is an odd number";
					echo "<br>";
				}
			}
		}

		for ($i=0;$i<count($numbers);$i++) {
			$number = $numbers[$i];
			checkNumbers($number);
		}
		

		
	?>
</body>
</html>