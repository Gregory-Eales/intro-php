<html>



<body>
	

	<h1> URL </h1>
	<hr>

	<form action="url.php" method="post">
		Enter Post: <input type="text" name="input">
		<input type="submit">
	</form>


	<form action="url.php" method="get">
		Enter Get: <input type="text" name="input">
		<input type="submit">
	</form>


</body>

<?php
	
	// post data
	echo $_POST["input"];

	// get data
	echo $_GET["input"];
?>



</html>