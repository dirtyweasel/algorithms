<?php



// 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

// What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?


$max = 20;
$num = 1;
$found = false;
$x =1;

while(!$found){
	for($x=1; $x<=$max; $x++){
		if($num%$x !== 0){
			$num++;	
			$x = 1;
		}
	}
	$found = true;
}
	echo "This is the number $num <br />";


?>