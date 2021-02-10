<!DOCTYPE html>
<html>
<head>
	<title> Switch Statements </title>
</head>
<body>

	<h1> Switch Statements</h1>
	<hr>

	<form action="switch.php" method="post">
		Enter Grade: <input type="text" name="grade">
		<input type="submit">
	</form>

	<br>

	<?php 

	$grade = $_POST["grade"];

	switch($grade)
	{
		case 'A':
			echo "Wow thats a good Grade! <br>";
			break;

		case 'B':
			echo "Pretty Good! Still room to improve!";
			break;

		case 'C':
			echo "Passing! You could probably have done better!";
			break;

		case 'D':
			echo "I don't think you were really trying!";
			break;

		case 'F':
			echo "I have no words....";
			break;

		default:
			echo "Invalid Grade!";
			break;
	}


	?>
</body>
</html>