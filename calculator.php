<?php
	class Calc{
		public function add($a,$b){
			echo $a+$b;}
		public function sub($a,$b){
			echo $a-$b;}
		public function mul($a,$b){
			echo $a*$b;}
		public function div($a,$b){
			echo $a/$b;} 
		}
	$c=new Calc(3,4);
	$c->add();
	class Caladv extends Calc{
		public function _pow($x,$t){
			echo pow($x,$t);}
		public function _sqrt($y){
			echo sqrt($y);}
		public function _exp($z){
			echo exp($z);}
		}
	$d=new Caladv;
	$d->sub(4,2);
	$d->_sqrt(16);
	


			
