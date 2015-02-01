<?php

// The prime factors of 13195 are 5, 7, 13 and 29.

// What is the largest prime factor of the number 600851475143 ?


$number = 600851475143;
$max = 0;

for($x=1; $x<=$number/2 ; $x++){
	if($number%$x ===0 && is_prime($x) && $x>$max){
		$max = $x;
		echo $max."\n";
	}

}

echo 'Largest prime factor is '.$max;

function is_prime($x){
	$is_prime = true;
	for($y=2 ; $y<=$x-1; $y++){
		if ($x%$y===0){
			$is_prime = false;
		}

	}
	return $is_prime;
}


?>