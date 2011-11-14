<?php
	function x(){
		$x=array(
			"name"=>"pooh",
			"age"=>22,
			"status"=>"single"
			);
		print_r($x);
		return($x);
			}
	foreach($x as $key=>$val){
		echo "term: ".$key."<br/>";
		echo "def: ".$val."<br>";
					}

