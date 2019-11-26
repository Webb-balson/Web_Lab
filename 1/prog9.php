<?php
	$states = "Mississippi Alabama Texas Massachusetts Kansas";
	$statesArray = [];
	$states1 = explode(' ',$states);
	
	echo "Original Array :<br>";
	foreach ( $states1 as $i => $value )
		print("STATES[$i]=$value<br>");

	foreach($states1 as $state)  {

		if(preg_match( '/xas$/', ($state)))
			$statesArray[0] = ($state);

	}

	print("<br><br>The name that ends with xas is:$statesArray[0]<br>");

	foreach($states1 as $state) {

		if(preg_match('/^k.*s$/i', ($state)))
			$statesArray[1] = ($state);

	}

	print("The name starts with k and ends with s is:$statesArray[1]<br>");

	foreach($states1 as $state) {

		if(preg_match('/^M.*s$/', ($state)))
			$statesArray[2] = ($state);

	}

	print("The name starts with M and ends with s is:$statesArray[2]<br>");

	foreach($states1 as $state) {

		if(preg_match('/a$/', ($state)))
			$statesArray[3] = ($state);

	}

	print("The name thatends with a is:$statesArray[3]<br>");

	echo "<br><br>Resultant Array :<br>";

	foreach ( $statesArray as $array => $value )

		print("STATES[$array]=$value<br>");
?>
