<?php
	class Calc{
		private $soln=0;
		public function add($a,$b){
			$this->soln=$a+$b;
			echo "add: ".$this->soln;}
		public function sub($a,$b){
			$this->soln=$a-$b;
			echo "diff: ".$this->soln;}
		public function mul($a,$b){
			$this->soln=$a+$b;
			echo "prod: ".$this->soln;}
		public function div($a,$b){
			$this->soln=$a+$b;
			echo "div: ".$this->soln;}
		}
	$c=new Calc;
	$c->add(3,4);
	class Caladv extends Calc{
		public function _pow($x,$t){
			echo "power: ".pow($x,$t);}
		public function _sqrt($y){
			echo "sq.root: ".sqrt($y);}
		public function _exp($z){
			echo "exponent: ".exp($z);}
		}
	$d=new Caladv;
	$d->sub(4,2);
	$d->_sqrt(16);
	


			
