var fibonacci = function(n){
		var a = 0, b = 1,x = 1;
	for(var i=2; i<=n; i++){
		x = a + b;
		a = b;
		b = x;
		console.log(x);
	}
}
fibonacci(10);

