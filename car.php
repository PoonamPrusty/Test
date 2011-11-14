<?php
	class Car{
		public $color;
		public $manu;
		}
	$beetle=new Car;
	$beetle->color="red";
	$beetle->manu="volkswagen";
	$mustang=new Car;
	$mustang->color="green";
	$mustang->manu="ford";
	echo "properties of CARS <br/>";
	echo "BEETLE:<br/>";
	echo "color is:$beetle->color & manufacturer is:$beetle->manu <br/>";
	echo "MUSTANG:<br/>";
	echo "color: $mustang->color & manufacturer: $mustang->manu<br/>";
	echo "\$beetle object<br/>";
	echo "<pre>";
	print_r($beetle);
	echo "</pre>";
	echo "\$mustang object<br/>";
	print_r($mustang);
?>
