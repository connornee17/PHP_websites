<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Booking Confirmation</title>
</head>
<body>
<h1>Rohirrim Tour Booking Confirmation</h1>
<?php
	function sanitise_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	if (isset ($_POST["firstname"])) {
		$firstname = $_POST["firstname"];
		$firstname = sanitise_input($firstname);
		echo "<p>This is a test: Your first name is $firstname</p>";
	}
	else {
		header ("location: register.html");
	}

	if(isset ($_POST["lastname"])) {
		$lastname = $_POST["lastname"];
		$lastname = sanitise_input($lastname);
		echo "<p>This is a test: Your last name is $lastname</p>";
	}
	else {
		echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
	}

	if(isset ($_POST["species"]))
		$species = $_POST["species"];
	else
		$species = "Unknown species";

	$tour = "";
	if (isset ($_POST["1day"]))
		$tour = $tour."One-day tour";
	if (isset ($_POST["4day"]))
		$tour= $tour."Four-day tour";
	if (isset ($_POST["10day"]))
		$tour = $tour."Ten-day tour";

	if(isset ($_POST["food"])) {
		$food = $_POST["food"];
		$food = sanitise_input($food);
	}
	else {
		echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
	}

	if(isset ($_POST["age"])) {
		$age = $_POST["age"];
		$age = sanitise_input($age);
	}
	else {
		echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
	}

	if(isset ($_POST["partySize"])) {
		$partySize = $_POST["partySize"];
		$partySize = sanitise_input($partySize);
	}
	else {
		echo "<p>Error: Enter data in the <a href=\"register.html\">form</a></p>";
	}
	

	$errMsg = "";

	if ($firstname=="") {
		$errMsg .= "<p>You must enter your first name.</p>";
	}
	else if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
		$errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
	}
	if ($errMsg != "") {
		echo "<p>$errMsg</p>";
	}
	else {
		echo "<p> Welcome $firstname $lastname !<br />
			You are now booked on the $tour <br/>
			Species: $species<br/>
			Age: $age<br/>
			Meal Preference: $food<br/>
			Number of travellers: $partySize</p>";
	}

?>
</body>
</html>