<?php

// A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
// a2 + b2 = c2

// For example, 32 + 42 = 9 + 16 = 25 = 52.

// There exists exactly one Pythagorean triplet for which a + b + c = 1000.
// Find the product abc.

$sum = 1000;
$product = 0;


for($x=1; $x<=$sum; $x++){
	for($y=1; $y<$x ; $y++){
		for($z=1; $z<$y; $z++){
			if( (pow($x,2) === (pow($y,2) + pow($z,2)) ) &&  $sum === $x+$y+$z ){
				$product = $x*$y*$z;
				echo 'x '. $x ."\t";
				echo 'y '. $y ."\t";
				echo 'z '. $z ."\t";

				echo "product -".$product."\n"; 
				break 3;
			}
		}
	}
}
echo "problem solved";

?>
