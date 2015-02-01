<?php

// A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

// Find the largest palindrome made from the product of two 3-digit numbers.

$start = 999;
$end   = 100;
$palindrome = false;
$string = "";
$max = 0;

	for ($y = $start; $y >= $end; $y--) {
	  	for ($x = $start; $x >= $end; $x--) { 		
	  			$mult = $x*$y;
				$string = (string)$mult;
				if($string === strrev($string) ){
					if ($string > $max){
						$max = $string;
						$end = $x;
					}				

				}	

	  	}		

	}
	echo $max;

			

?>