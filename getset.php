<?php
	class Car{
		public $manu;
		public $color;
		public $model;
		private $extra=array();
		public function __get($propname){
			if(array_key_exists($propname,$this->extra))
				return $this->extra[$propname];
			else 
				return null;}
		public function __set($propname,$propval){
			return $this->extra[$propname]=$propval;}
		}
	$mycar=new Car;
	$mycar->manu="volkswagen";
	$mycar->color="red";
	$mycar->model="beetle";
	$mycar->engine=1.8;
	$mycar->othercolors=array("black","blue");
	echo"<p>MY CAR</p>";
	echo"Manufacturer is: ".$mycar->manu."<br/>";
	echo"Engine set is: ".$mycar->engine."<br/>";
	echo"Fuel type is: ".$mycar->fuel."<br/>";
	echo"<pre>";
	print_r($mycar);
	echo"</pre>";

