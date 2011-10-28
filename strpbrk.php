<?php
	$str="hi,der!";
	echo strpbrk($str,"abcd")."<br/>";
	$user="pooh@poonam.com";
	if (strpbrk($user, "@!"))
		echo "@ & ! are not allowed in usernames";
?>
