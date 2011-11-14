<?php
	class Mycar{
		const MYCONST=123;
		public static $staticvar=456;
		public function mymethod(){
			echo"myconst: ".Mycar::MYCONST."<br/>";
			echo"\$staticvar: ".Mycar::$staticvar."<br/>";}}
	$obj=new Mycar;
	$obj->mymethod();
