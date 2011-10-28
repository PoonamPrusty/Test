<?php
	$str="hye, der!";
	echo strpos($str,"y")."<br/>";
	echo strpos($str,"e")."<br/>";
	echo strrpos($str,"e")."<br/>";
	$st="hello,world!";
	$pos=0;
	   while(($pos=strpos($st,"l",$pos))!==false){
		echo "letter L is found at: $pos<br/>";
		$pos++;
	   }
	$st1="i said no,no and no!";
	echo substr_count($st1,"no")."<br/>";
	echo substr_count($st1,"no",8)."<br/>";
	echo substr_count($st1,"no",8,4)."<br/>";
?>
