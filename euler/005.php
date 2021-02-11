<hr>
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
<br>
<br>
What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
<hr>

<?php 
	
	function get_primes($n)
	{

		$primes = array(2);

		for($i=3;$i<=$n;$i++)
		{

			$is_prime = true;

			for($j=0;$j<count($primes);$j++)
			{

				if($i%$primes[$j]==0)
				{
					$is_prime=false;
				}

				if($is_prime==false or sqrt($i)<$primes[$j])
				{
					break;
				}
			}

			if($is_prime)
			{
				array_push($primes, $i);
			}
		}

		return $primes;

	}

	function get_min_multiples()
	{

	}

	function get_all_divisible()
	{
		
	}

	get_primes();

?>