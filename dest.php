<?php
	class Person{
		public function save(){
			echo"saving d obj to database<br/>";}
		public function __destruct(){
			$this->save();}
		}
	$p=new Person;
	unset($p);
	$p2=new Person;
	die( "Something's gone horribly wrong! <br/> ");
?>
