<?php
	$starttime=microtime(true);
	$finishtime=$starttime+0.0001;
	for($num=1;microtime(true)<$finishtime;$num=$num*2){
		echo "current no. $num<br>";			}
	echo"out of time!";
?>
