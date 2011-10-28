<?php
	$a="hello";
	$b="world";
	function hello()
	{
	global $a,$b;
	echo "$a $b<br>";
	}
	hello();
	echo $a;
	echo $b;
