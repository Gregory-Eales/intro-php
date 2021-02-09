<html>


<body>

<?php
	// print header
	echo "<h1> Input </h1>";
	echo "<hr>";
?>

<form action="input.php" method="get">
	Name: <input type="text" name="name">
	<input type="submit">
</form>

<?php 
	echo "your name is ";
	echo $_GET["name"];
?>

</body>


</html>