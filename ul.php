<?php
	/* Write a function which takes in an array of strings, and returns one big string: 
	the html for a unordered-list with each array-element as a list item
	*/
	function ul ($array) {
		$string = "<ul>\n";
		foreach ($array as $item) {
			$string .= "    <li>$item</li>\n";
		}
		$string .= "<\ul>\n";
		return $string;
	}

	$array = array("apple","banana","yoyo");
	$array2 = array(1,2,3);
	$array3 = array("test",80,"test");
	echo ul($array);
	echo ul($array2);
	echo ul($array3);
?>