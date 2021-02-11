<hr>
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
<br>
<br>
What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
<hr>

<?php 
	

	// gets all the prime numbers
	// up to a value n
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


	// gets the number of times a number
	// will evenly divide into another
	function get_n_divisions($num, $den)
	{
		$n = 0;
		while(true)
		{
			if($num%$den==0)
			{
				$num=$num/$den;
				$n++;
			}
			else
			{
				break;
			}
		}

		return $n;
	}


	// get and count the number of
	// prime factors in a number
	function get_prime_factors($n)
	{

		$primes = get_primes($n);
		$factors = array();

		for($i=0;$i<count($primes);$i++)
			{
				$factors[$i]=1;
			}

		for($j=2;$j<=$n;$j++){
			for($i=0;$i<count($primes);$i++)
			{
				$m = get_n_divisions($j, $primes[$i]);

				echo $m, $j, $primes[$i];
				echo '<br>';

				if($m > $factors[$i] && $m>=1)
				{
					$factors[$i] = $m;
				}
				
			}
		}

		$sum = 1;

		for($i=0;$i<count($primes);$i++)
			{
				$sum *= pow($primes[$i],$factors[$i]);
			}

		return $sum;

	}

	echo get_prime_factors(21);

?>