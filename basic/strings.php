<?php
	
	echo("<h1>Strings</h1>");
	echo("<hr>");

	$phrase = "Open, Closed, Shut";

	// prinnt the variable phrase
	echo $phrase;
	echo "<br>";

	// make string all lower
	echo strtolower($phrase);
	echo "<br>";

	// make string all upper
	echo strtoupper($phrase);
	echo "<br>";

	// raplace string section with another string
	echo str_replace("Open", "Closed", $phrase);
	echo "<br>";

	// only include the characters after index
	echo substr($phrase, 8);

	
?>