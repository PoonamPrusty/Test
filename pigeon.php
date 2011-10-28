<?php
	$mapsize=10;//posn of home n pigeons
	do{
	$homeX=rand(0,$mapsize-1);
	$homeY=rand(0,$mapsize-1);
	$pigeonX1=rand(0,$mapsize-1);
	$pigeonY1=rand(0,$mapsize-1);
	$pigeonX2=rand(0,$mapsize-1);
	$pigeonY2=rand(0,$mapsize-1);
	}while((abs($homeX-$pigeonX1)<$mapsize/2)&&(abs($homeY-$pigeonY1)<$mapsize/2)&&(abs($homeX-$pigeonX2)<$mapsize/2)&&(abs($homeY-$pigeonY2)<$mapsize/2));
	do{
		//move pgn closer to home
		if($pigeonX1<$homeX)
	   	   $pigeonX1++;
		elseif($pigeonX1>$homeX)
	   	   $pigeonX1--;
		if($pigeonY1<$homeY)
	   	   $pigeonY1++;
		elseif($pigeonY1>$homeY)
	   	   $pigeonY1--;
		if($pigeonX2<$homeX)
	   	   $pigeonX2++;
		elseif($pigeonX2>$homeX)
	   	   $pigeonX2--;
		if($pigeonY2<$homeY)
	   	   $pigeonY2++;
		elseif($pigeonY2>$homeY)
	   	   $pigeonY2--;
		//disp current map
		echo'<div class="map"style="width: ' .$mapsize.'em;"><pre>';
		for($y=0;$y<$mapsize;$y++){
			for($x=0;$x<$mapsize;$x++){
		   	  if($x==$homeX&&$y==$homeY){
		       		print("+");}//home
		          elseif($x==$pigeonX1&&$y==$pigeonY1){
		       		print("p");}//pgn1
			  elseif($x==$pigeonX2&&$y==$pigeonY2){
		       		print("b");}//pgn2
		          else{
		       		print(".");}//empty sq.
			echo($x!=$mapsize-1)?" ":"";}
				echo"\n";}
		echo"</pre></div>\n";
	}while(($pigeonX1!=$homeX||$pigeonY1!=$homeY)||($pigeonX2!=$homeX||$pigeonY2!=$homeY));
?>
