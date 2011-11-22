<?php
	class Calc{
		protected $a;
		protected $b;
		public function __construct($x,$y){
			$this->a=$x;
			$this->b=$y;}
		public function add(){
			return $this->a+$this->b;}
		public function sub(){
			return $this->a-$this->b;}
		public function mul(){
			return $this->a*$this->b;}
		public function div(){
			return $this->a/$this->b;}
		}
	$c=new Calc(3,4);
		echo $c->add();
		echo $c->mul();
	class Caladv extends Calc{
		public function __construct($a,$b=2){
			parent::__construct($a,$b);}
		public function _pow(){
			return pow($this->a,$this->b);}
		public function _sqrt(){
			return sqrt($this->a);}
		public function _exp(){
			return exp($this->a);}
		}
	$d=new Caladv(25);
	echo $d->_sqrt();
	$d=new Caladv(2,3);
	echo $d->_pow();
	
