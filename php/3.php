<?php

// The prime factors of 13195 are 5, 7, 13 and 29.

// What is the largest prime factor of the number 600851475143 ?

$try = 600851475143;
	if($try%5 == 0){
		$try /= 5;
		echo 5 . "\n";
	}
	if($try%7 == 0){
		$try /= 7;
		echo 7 . "\n"; 
	}

for($x=11 ; $x<$try; $x++){

	if( ($x%2 !== 0) && 
		($x%3 !== 0) &&
		($x%5 !== 0) &&
		($x%7 !== 0) &&
		($try%$x == 0) 
	  ){ 
	    echo $x . "\n";
		$try = $try / $x;
		    if($x==$try){
		    	break;
		    }
	   }
}

?>