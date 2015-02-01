<?php

// The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

// Find the sum of all the primes below two million.
ini_set('max_execution_time', 2700); //900 seconds = 45 minutes
$time_start = microtime(true); 
$aim = 2000000;
$start=3;
$sum = 2;
$primes = [2];


for($x=$start; $x<=$aim; $x++){
	if(isPrime($x, $primes) ){
		echo $x."\n";
		$sum +=$x;
		$start = $x+1;
		array_push($primes, $x);

	}
}

echo 'The sum of the primes is '.$sum;
echo "\n";

function isPrime($x, $primes){
	$is_prime = true;
	foreach($primes as $prime){
		if ($x%$prime===0){
			$is_prime = false;
			break;
		}
	}
	return $is_prime;
}
	
$time_end = microtime(true);
$total_time = ($time_end - $time_start)/60;

echo 'Total time taken is '.$total_time;
echo "\n";

?>
