<!DOCTYPE html>
<html>
<head>
	<title> Constructors</title>
</head>
<body>

	<h1> Constructors </h1>
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


			function __construct($n, $a, $w)
			{	
				echo "construct called <br>";
				$this->name = $n;
				$this->age = $a;
				$this->weight = $w;
			}
		}

		$P1 = new Person("Greg", 22, 200);
		echo $P1->name;

	?>

</body>
</html>