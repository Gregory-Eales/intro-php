<hr>
The prime factors of 13195 are 5, 7, 13 and 29.
<br>
<br>
What is the largest prime factor of the number 600851475143 ?
<hr>

<?php
	
	function get_p_factor($n)
	{
		$max = floor(sqrt($n));

		$primes = get_primes($max);

		$num = 0;

		for($i=0;$i<count($primes);$i++)
		{	
			if($n%$primes[$i]==0)
			{
				$num=$primes[$i];
			}
		}
		return $num;
	}


	// gets all primes less than n
	function get_primes($n)
	{
		$primes = array(2, 3, 5);

		for($i=4;$i<$n; $i++)
		{
			$is_prime = true;

			for($j=0;$j<count($primes);$j++)
			{

				if($i%$primes[$j] == 0)
				{
					$is_prime = false;
				}

				if($is_prime == false or sqrt($i)<$primes[$j])
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

	echo get_p_factor(600851475143);

?>