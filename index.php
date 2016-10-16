<!DOCTYPE html>

<html lang="en">

	<head>
		<title>Palindrome</title>		
	</head>
	
	<body>
	
		<form method="post" action="index.php">
			<input type="text" name="name" placeholder="Is it a palindrome?" />
			<input type="submit" name="submit" value="Submit" />
		</form>

	</body>

</html>

<?php

if ($_POST) {
	$name = strtolower($_POST['name']);
		if ($name == strrev($name)) {
			echo "The entered word is a palindrome.";
		}
		else {
			echo "The entered word is not a palindrome.";
		}
	}

?>