<?php
	$x=array("A","B","C");//indexd array
	$book=array("title"=>"macbeth","author"=>"shakespeare","year"=>1939);//associative array
	print_r($book);
	$val=$x[1];//accessing array elements
	$writer=$book["author"];
	echo $val;
	echo $writer;
	$x[]="D";//inserting or changing element
	print_r($x);
	print_r($book);//outputting d array
	$xslice=array_slice($x,1,1);//extracting rng of elements
	print_r($xslice);
	echo count($book);//counting elements of array
	$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );//stepping thru
	echo "The array: " . print_r( $authors, true ) ;
	echo "The current element is: " . current( $authors )  ;
	echo "The next element is: " . next( $authors )  ;
	echo "...and its index is: " . key( $authors ) ;
	echo "The next element is: " . next( $authors )  ;
	echo "The previous element is: " . prev( $authors )  ;
	echo "The first element is: " . reset( $authors ) ;
	echo "The last element is: " . end( $authors )  ;
	echo "The previous element is: " . prev( $authors );
?>
