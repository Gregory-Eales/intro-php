<hr>


A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

<br>
<br>

Find the largest palindrome made from the product of two 3-digit numbers.


<hr>

<?php 
	
	function check_palindrome($n)
	{
		$n = strval($n);
		$l = strlen($n);
		$idx = floor($l/2);

		$str1 = substr($n, 0, $idx);
		$str2 = substr($n, $idx+$l%2);

		if($str1==strrev($str2))
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	function get_palindrome()
	{
		$num = 0;

		for($i=999;$i>=800;$i--)
		{
			for($j=999;$j>=800;$j--)
			{
				if(check_palindrome($i*$j) && $i*$j > $num)
				{
					$num = $i*$j;
				}
			}
		}

		return $num;
	}


	echo get_palindrome();

?>