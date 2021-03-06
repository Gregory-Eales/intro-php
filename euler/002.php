
<hr>
Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:

<br>
<br>

1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

<br>
<br>

By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
<hr>

<?php

	//ini_set('memory_limit', '-1');
	
	// add up the all even
	// numbers in an array
	function sum_even($n)
	{
		$m = array();

		for($i=0;$i<count($n);$i++)
		{
			if($n[$i]%2 == 0)
			{
				array_push($m, $n[$i]);
			}
		}

		return array_sum($m);
	}


	// gets fibonacci numbers up to n
	function get_n_fib($n)
	{
		$m = array(1, 1);

		for($i=2;$i<=$n;$i++)
		{

			if($m[$i-1]+$m[$i-2] < $n)
			{
				$m[$i] = $m[$i-1]+$m[$i-2];
			}
			else{
				break;
			}

		}

		return $m;
	}

	
	$x = get_n_fib(4000000);
	echo sum_even($x);

?>