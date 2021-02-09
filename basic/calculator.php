<html>

<head>
	
	<h1> Calculator </h1>
	<hr>

</head>

<body>

	<form action="calculator.php" meth="get">
		<input type="number" name="num1">
		<br>
		<input type="number" name="num2">
		<input type="submit">
	</form>

Answer = <?php echo $_GET["num1"] + $_GET["num2"]; ?>
	

</body>




</html>