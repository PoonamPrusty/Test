<?php
	$hr=date("G");
	$yr=date("Y");
	if($hr>=5&&$hr<12){
	   echo"<h1>gudmng</h1>";}
	elseif($hr>=12&&$hr<18){
	   echo"<h1>gudaf</h1>";}//h1 is for header
	elseif($hr>=18&&$hr<22){
	   echo"<h1>gudevn</h1>";}
	else{
	   echo"<h1>gn8</h1>";}
	$lpyr=false;
	if((($yr%4==0)&&($yr%100!=0))||($yr%400==0)){
	   $lpyr=true;}
	   echo"<p>$yr is ".($lpyr ?"" : "not")." a leap yr</p>";//p is for paragraph
?>
