<?php
	class Car{
		public $model;
		public $manu;
		public $color;
		private $speed;
		public function accelerate(){
			if($this->speed>=100)return false;
				$this->speed+=10;
				return true;
						}
		public function brake(){
			if($this->speed<=0)return false;
				$this->speed-=10;
				return true;
						}
		public function get_speed(){
			return $this->speed;}
		}
	$mycar=new Car;
	$mycar->color="red";
	$mycar->manu="volkswagen";
	$mycar->model="beetle";
	echo"<p>M driving a $mycar->color $mycar->manu $mycar->model</p>";
	echo"stepping on d gas..<br/>";
	while($mycar->accelerate()){
		echo"current speed : ".$mycar->get_speed()."mph<br/>";}
	echo"slowing down<br/>";
	while($mycar->brake()){
		echo"current speed : ".$mycar->get_speed()."mph<br/>";}
	echo"stopped!!<br/>";
?>
		

