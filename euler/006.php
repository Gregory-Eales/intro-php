<hr>
The sum of the squares of the first ten natural numbers is,
<br>
<br>
	1^2 + 2^2 ... + 10^2 = 385
<br>
<br>
The square of the sum of the first ten natural numbers is,
<br>
<br>
	(1 + 2 + 3 ... + 10)^2 = 3025
<br>
<br>
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is
<br>
<br>
	3025 - 385 = 2640
<br>
<br>
Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
<hr>

<?php

	$x = 0;
	$y = 0;

	for($i=1;$i<=100;$i++)
	{
		$x += pow($i, 2);
		$y += $i;
	}

	echo pow($y, 2) - $x;




?>