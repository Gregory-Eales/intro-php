<html>
<head>
	<title> Arrays</title>
</head>
<body>

	<h1>Arrays</h1>
	<hr>


	<?php

		// init array
		$coins = array("Bitcoin", "Doge", "Ethereum");

		echo $coins[0];

		$coins[3] = "Ripple";
		$coins[4] = "Stellar";

		for($i=0; $i<count($coins); $i++)
		{
			echo $coins[$i];
			echo "<br>";
		}
	?>

</body>
</html>