<html>
<head>
	<title> Object Functions</title>
</head>
<body>

	<h1> Object Functions </h1>
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

			function say_Hello()
			{
				echo "<br> This is and object function <br>";
			}
		}

		$P1 = new Person("Greg", 22, 200);
		echo $P1->name;
		$P1->say_Hello();

	?>

</body>
</html>