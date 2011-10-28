<?php
	echo "without reference";
	$x=10;
	$y=$x;
	$y++;
	echo "x=$x,y=$y<br>";
	$z=&$x;
	$z++;
	echo "x=$x,y=$y,z=$z<br>";
?>
