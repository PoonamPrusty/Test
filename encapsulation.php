<?php
	class Account{
		private $totbal=0;
		public function deposit($amt){
			$this->totbal+=$amt;}
		public function withdraw($amt){
			if($amt<$this->totbal)
				return $this->totbal-=$amt;
			else
				die("insufficient funds<br/>");}
		public function getbal(){
			return "ur balance is: ".$this->totbal."<br/>";}}
	$a=new Account;
	$a->deposit(500);
	$a->withdraw(200);
	echo $a->getbal();
	$a->withdraw(500);
