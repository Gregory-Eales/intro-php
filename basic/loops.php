<html>

<head>
	
<meta charset="utf-8" />
<title> Loops!</title>

</head>

<body>

	<h1> Loops </h1>
	<hr>
	
	<?php

	// this is a comment

	$x = 0;

	while($x<10)
	{	
		echo "x is equal to: ";
		echo $x;
		echo "<br>";
		$x++;
	}
	echo "<br>";


	$nums = array(10, 55, 22, 1002, 34);

	for($i=0; $i<5; $i++)
	{
		echo $nums[$i];
		echo "<br>";
	}

	?>


</body>


</html>