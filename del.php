<?php
	$a=array('a'=>'hi','b'=>2,'hi'=>'abc',2=>4);
	echo "<pre>";
	print_r($a);
	unset($a['b']);
	print_r($a);
	echo in_array(2,$a);//syntax error in book
