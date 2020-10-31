<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Buggy Syntax Palindrome</title>

<meta charset="utf-8" />
<meta name="description" content="Lab08 - Debug" />
<meta name="keywords" content="PHP, strings" />
<body>
<h1>Lab08 - Buggy Syntax Palindrome</h1>
<hr />

<?php
/*	
	Lab08 
	Some buggy code with syntax and logic erros 
	Author: A. Tutor
*/
	$inputText = $_GET["text_string"];
	$inputText = stripslashes(trim($inputText));

if(isset($_GET["text_string"]) 
	

	if ($inputText == NULL) {
		$forwardText = $inputText;
		$reverseText = strrev($inputText);
		if (strcmp($forwardText, $reverseText) == 0)
			echo "<p class='yes'>The text you entered: <strong>'", $inputText, "'</strong> is a perfect palindrome!</p>";
		else
			echo "<p class='no'>The text you entered: <strong>'", $inputText, "'</strong> is NOT a perfect palindrome.</p>";
	} else {
		echo "<p class='wrong'>Enter a word or phrase and click the 'Check for Perfect Palindrome' button.</p>";
	}

}	
?>

<form action="buggysyntaxpalindrome.php" method="get" >
	<!--- Remembers the last input value -->
	<p>	<label for="textstring">String:</label>
		<input type="text" name="text_string" id="textstring" 
			value="<?php if (!empty($inputText)) echo $inputText ?>" />
	</p>
	<p>	<input type="submit" value="Check for Perfect Palindrome" /></p>
</form>
<hr />
</body>
</html>
