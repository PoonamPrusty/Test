<?php
	$string="a1bb b2cc c2dd";
	$regex="#([abc])\d#";
	$matches=array();
		if(preg_match_all($regex,$string,$matches)){
		var_dump($matches);}
?>
