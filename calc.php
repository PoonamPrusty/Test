<?php
	class Calc{
		private $a;
		private $b;
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
	echo $c->add();echo $c->mul();
	class Caladv extends Calc{
		private $m;
		public function __construct($p){
			$this->m=$p;}
		parent::__construct($x,$y);
		public function _pow(){
			return pow($this->a,$this->b);}
		public function _sqrt(){
			return sqrt($this->m);}
		public function _exp(){
			return exp($this->m);}
		}
	$d=new Caladv(25);
	echo $d->_sqrt();
