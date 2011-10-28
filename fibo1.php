<?php
	$iterations=10;
	function fibonacci($n){
		if(($n==0)||($n==1)) return $n;
		return fibonacci($n-2)+fibonacci($n-1);
		}
	$start_time = microtime(true);
	for($i=0;$i<=$iterations;$i++)
		echo "F".$i."  ".fibonacci($i)."<br/>";

	echo "Time elapsed: ",microtime(true)-$start_time, " seconds";

