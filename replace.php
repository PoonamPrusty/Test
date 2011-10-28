<?php
	$user="davey@php.net";
	$name=substr_replace($user,"",strpos($user,'@'));
	echo "hello ".$name."<br/>";
	$x="The news gave us the bad news.";
	echo $x."<br/>";
	echo str_replace("news","time",$x)."<br/>";
	echo str_replace("news","time",$x,$num)."<br/>";
	echo "The string was replaced $num times <br/>";
	echo substr_replace($x,"time",14)."<br/>";
	echo substr_replace($x,"time",14,2)."<br/>";
	echo substr_replace($x,"time",14,-14)."<br/>";
	echo substr_replace($x," really",8,0)."<br/>";
	$y="Here's a lil thing";
	echo strtr($y," '","+-")."<br/>";
?>
