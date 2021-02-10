<!DOCTYPE html>
<html>
<head>
	<title>Classes</title>
</head>
<body>

	<h1> Classes </h1>
	<hr>

	<?php

		class Person
		{
			var $age;
			var $name;
			var $weight;
			var $sex;
			var $nationality;
			var $language;
		}

		$greg = new Person;

		$greg->name = "Greg";
		$greg->age = "22";
		$greg->weight = "200";
		$greg->sex = "Male";
		$greg->nationality = "British";
		$greg->language = "English";
		
		echo $greg->name;
		echo "<br>";
		echo $greg->age;
		echo "<br>";
		echo $greg->weight;
		echo "<br>";
		echo $greg->sex;
		echo "<br>";
		echo $greg->nationality;
		echo "<br>";
		echo $greg->language;



	?>

</body>
</html>