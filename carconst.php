<?php
	class Car{
	const HATCHBACK=1;
	const STATIONWAGON=2;
	const SUV=3;
	public $model;
	public $color;
	public $manu;
	public $type;
		}
	$mycar=new Car;
	$mycar->model="Dogde Calliber";
	$mycar->color="red";
	$mycar->manu="chrysler";
	$mycar->type=Car::SUV;
	echo"this $mycar->model is a : ";
	switch($mycar->type){
		case Car::HATCHBACK:
			echo"hatchback";
			break;
		case Car::STATIONWAGON:
			echo"station_wagon";
			break;
		case Car::SUV:
			echo"suv";
			break;
				}
?>

