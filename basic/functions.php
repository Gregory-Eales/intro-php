<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>

	<h1> Functions </h1>
	<hr>

	<?php  

		function sayHello()
		{
			echo "Hello, this is a function!";
			echo "<br>";

			return "This is a return value! <br>";
		}

		for($i=0;$i<5;$i++){
			echo sayHello();
		}

	?>


</body>
</html>