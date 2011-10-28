<?php
	$iterations=20;
	function fibonacci($n){
		static $results = array();
		if(empty($results[$n])) {
			$results[$n] = (($n==0)||($n==1)) ? $n : 	$results[$n] = fibonacci($n-2)+fibonacci($n-1);
		}
		return $results[$n];
	}
	$start_time = microtime(true);
	for($i=0;$i<=$iterations;$i++)
		echo "F".$i."  ".fibonacci($i)."<br/>";

	echo "Time elapsed: ",microtime(true)-$start_time, " seconds";


