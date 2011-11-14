<?php
	interface Sellable{
		public function addstock($numitems);
		public function sellitem();
		public function getstocklevel();
		}
	class Television implements Sellable{
		private $_screensize;
		private $_stocklevel;
		public function getscreensize(){
			return $this->_screensize;}
		public function setscreensize($screensize){
			$this->_screensize=$screensize;}
		public function addstock($numitems){
			$this->_stocklevel+=$numitems;}
		public function sellitem(){
			if($this->_stocklevel>0){
				$this->_stocklevel--;
				return true;}
			else
				return false;}
		public function getstocklevel(){
			return $this->_stocklevel;}
	}
	class Tennis_ball implements Sellable{
		private $_color;
		private $_ballsleft;
		public function getcolor(){
			return $this->_color;}
		public function setcolor($color){
			$this->_color=$color;}
		public function addstock($numitems){
			$this->_ballsleft+=$numitems;}
		public function sellitem(){
			if($this->_ballsleft>0){
				$this->_ballsleft--;
				return true;}
			else
				return false;}
		public function getstocklevel(){
			return $this->_ballsleft;}
	}
	class Storemanager{
		private $_prodlist=array();
		public function addprod(Sellable $prod){
			$this->_prodlist[]=$prod;}
		public function stockup(){
			foreach($this->_prodlist as $prod){
				$prod->addstock(100);}}
	}
	$tv=new Television;
	$tv->setscreensize(42);
	$ball=new Tennis_ball;
	$ball->setcolor("yellow");
	$manager=new Storemanager;
	$manager->addprod($tv);
	$manager->addprod($ball);
	$manager->stockup();
	echo "<p> There are ". $tv-> getStockLevel() . " " . $tv-> getScreenSize();
	echo "-inch televisions and " . $ball-> getStockLevel() . " " .
	$ball-> getColor();
	echo " tennis balls in stock. </p> ";
	echo " <p> Selling a television... </p> ";
	$tv-> sellItem();
	echo " <p> Selling two tennis balls... </p> ";
	$ball-> sellItem();
	$ball-> sellItem();
	echo " <p> There are now ". $tv-> getStockLevel() . " " . $tv-> getScreenSize();
	echo "-inch televisions and " . $ball-> getStockLevel() . " " .
	$ball-> getColor();
	echo " tennis balls in stock. </p> ";
?>
	

		
		


