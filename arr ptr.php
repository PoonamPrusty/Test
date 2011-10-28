<?php
	$array=array('foo'=>'bar','baz','bat'=>2);
	function displayarray($array){
		reset($array);
		while(key($array)!==null){
			echo key($array).":".current($array).PHP_EOL;
			next($array);
					}
			}
?>
