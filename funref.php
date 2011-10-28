<?php
	function resetCounter( $c ) {
		$c = 0;
		}
	$counter = 0;echo $counter."<br/>";
	$counter++;echo $counter."<br/>";
	$counter++;echo $counter."<br/>";
	$counter++;echo $counter."<br/>";
	echo "$counter <br/> "; // Displays “3”
	resetCounter( $counter );
	echo "$counter <br/> "; // Displays “3”
echo "return by reference reference from own funcns <br/>";
	$myno=5;
	function &getno(){
		global $myno;
		return $myno;
			}
	$noref=&getno();
	$noref++;
	echo $myno."<br/>";
	echo $noref."<br/>";
