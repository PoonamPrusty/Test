<?php
	class Cleverstring{
		private $thestring="";
		private static $allowedfunctions=array("strlen","strtoupper","strpos");
		public function setstring($strval){
			$this->thestring=($strval);}
		public function getstring(){
			return $this->thestring;}
		public function __call($methname,$arg){
			if(in_array($methname,Cleverstring::$allowedfunctions)){
				array_unshift($arg,$this->thestring);
				return call_user_func_array($methname,$arg);}
			else
				die("<p>Method 'Cleverstring::$methname' doesn't exist</p>");}}
				
		$mystring=new Cleverstring;
		$mystring->setstring("hello");
		echo"<p>String is: ".$mystring->getstring()."</p>";
		echo"<p>String length is: ".$mystring->strlen()."</p>";
		echo"<p>String in uppercase is: ".$mystring->strtoupper()."</p>";
		echo"<p>Posn of 'e' is: ".$mystring->strpos("e")."</p>";
		$mystring->madeupmethod();
?>
