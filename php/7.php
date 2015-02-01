<?php



//By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

//What is the 10 001st prime number?

$num = 4;
$x = 10001;
$divisors = [2,3,5,7];
$prime = true;
$numerator = 10;

while($num !== $x){
	$numerator++;
	foreach($divisors as $div){
		if($numerator%$div === 0){
			$prime = false;
			echo "$numerator is not prime \n";
			break;
		}
	}
	if($prime){
		$num++;
		echo $numerator." is prime \n";
		$divisors[count($divisors)] = $numerator;
	}else{
		$prime = true;
	}
	
}
if( $num%10 ===1)
{
	echo 'The '.$num.'st prime number is '.$numerator."\n";	
}
else if( $num%10 ===2)
{
	echo 'The '.$num.'st prime number is '.$numerator."\n";	
}
else
{
	echo 'The '.$num.'th prime number is '.$numerator."\n";	
}

?>