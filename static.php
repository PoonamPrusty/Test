<?php
	function num(){
		$counter=0;
		return $counter++;
			}
	echo "counter is: ".num()."<br/>";
	echo "counter is: ".num()."<br/>";
	echo "counter is: ".num()."<br/>";
	function num1(){
		static $count=0;
		return $count++;
			}
	echo "count is: ".num1()."<br/>";
	echo "count is: ".num1()."<br/>";
	echo "count is: ".num1()."<br/>";
	
