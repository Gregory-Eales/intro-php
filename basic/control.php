<html>
	
<head>
	<meta charset='utf-8' />
	<title> Controls! </title>
</head>

<body>

	<?php

	$is_allowed = true;
	$is_open = false;

	echo $is_allowed;
	echo "<br>";
	echo $is_open;

	if ($is_allowed==true)
	{
		echo "This is allowed!";
	}

	else
	{
		echo "This is not allowed!";
	}

	echo "<br>";

	if ($is_open)
	{
		echo "This is open!";
	}

	else
	{
		echo "This is not open!";
	}

	?>


</body>

</html>