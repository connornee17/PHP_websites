<!DOCTYPE html> 
<html lang="en"> 
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Web application development" /> 
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Your Name" />
	<title>Setup</title>
</head>
<body>
	<h1>Hit Counter - Setup</h1> 

	<form action="setup.php" method="post">
		<input type= "submit" value="ENTER"/>
	</form>

	<?php

		umask(0007);
		$dir = "/home/students/accounts/s102061410/cos30020/www/data/lab10";
		if (!file_exists($dir)) {
			mkdir($dir, 02770);
		}
		$filename = "/home/students/accounts/s102061410/cos30020/www/data/lab10/mykeys.inc.php";
		if (!file_exists($filename)) {
			$handle = fopen($filename, "w");
			$data = "<?php $host = 'feenix-mariadb.swin.edu.au'; $user = 's102061410'; $pswd = 'cookies11'; $dbnm = 's102061410_db'; ?>";
			fputs($handle, $data);
		}

		require_once ($filename);

		$conn = @mysqli_connect($host,
			$user,
			$pswd,
			$dbnm
		);

		if (!$conn) {
			echo "<p>Database connection failure</p>";
		} else {

			$mytable = "CREATE TABLE IF NOT EXISTS hitcounter (
							id SMALLINT NOT NULL PRIMARY KEY,
							hits SMALLINT NOT NULL
						); INSERT INTO hitcounter VALUES (1,0);";
			$query = mysqli_query($conn, $mytable); 




			echo "<p>Setup was successful!</p>";

		}

		mysqli_close($conn);


	?>

</body>
</html>
