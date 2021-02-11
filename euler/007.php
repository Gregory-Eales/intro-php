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

			if(count($primes) == 10001)
			{
				return $i;
			}
		}

	}

	echo get_primes(1000000);

?>