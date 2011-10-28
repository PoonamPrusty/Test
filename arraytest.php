<?php
	$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens", "Milton",
			   "Orwell" );
	$books = array(
			array(
				"authorId" => 2,
				"title" => "The Hobbit",
				"pubYear" => 1937
				),
			array(
				"authorId" => 0,
				"title" => "The Grapes of Wrath",
				"pubYear" => 1939
				),
			array(
				"authorId" => 3,
				"title" => "A Tale of Two Cities",
				"pubYear" => 1859
				),
			array(
				"authorId" => 4,
				"title" => "Paradise Lost",
				"pubYear" => 1667
				),
			array(
				"authorId" => 5,
				"title" => "Animal Farm",
				"pubYear" => 1945
				),
			array(
				"authorId" => 1,
				"title" => "The Trial",
				"pubYear" => 1925
				),
		);
	echo"<pre>";
	print_r($books);
	echo"</pre>";
		foreach($books as $key => $val){
				  $books[$key]["authorname"]=$authors[$val["authorId"]];
							   }
								
		echo"<pre>";
		print_r($books);
		echo"<pre>";
	


