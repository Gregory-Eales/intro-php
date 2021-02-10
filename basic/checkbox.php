<html>


<h1> Check Box</h1>
<hr>

<form action="checkbox.php", method="post">
	Apples: <input type="checkbox" name="fruits[]" value="apples">
	<br>
	Oranges: <input type="checkbox" name="fruits[]" value="oranges">
	<br>
	<input type="submit">
</form>

<?php

	print_r($_POST["fruits"]);
	echo "<br>";
	echo $_POST["fruits"][0];
?>

</html>