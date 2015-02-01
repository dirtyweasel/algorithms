var aim = 2000000;
var start = 3;
var sum = 2;
var primes = [2];

var isPrime = function (x, primes){
	var is_prime = true;
		for(y=0; y<primes.length; y++){
			if (x%primes[y]===0){
				console.log(x);
				is_prime = false;
				break;
			}
	}
	return is_prime;
}


for(x=start; x<=aim; x++){
	if(isPrime(x, primes) ){
		sum +=x;
		start = x+1;
		primes.push(x);

	}
}

console.log('The sum of the primes is ' + sum );





	

