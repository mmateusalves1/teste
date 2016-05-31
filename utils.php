<?php
	/*
	Mateus Alves Gomes
	ITEC 325 - Spring 2016
	https://php.radford.edu/~itec325/2016spring-ibarland/Homeworks/hw01.html
	*/
	
	//Function that receives a int ($num) and a string ($noun), adds a s to the string (if it's necessary), then return a friendly version of $num + $noum
	function pluralize($num,$noun)  {
		if ($num > 1 or $num == 0) {
			$noun = $noun . "s";
			return $num . " " . $noun;
		}
		elseif ($num == 1) {
			return $num . " " . $noun;
		}
	}
?>