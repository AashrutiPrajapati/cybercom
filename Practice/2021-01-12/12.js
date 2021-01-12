//Hosting 
/*
function calculateAge(year)
{
	console.log(2018 - year);
}
calculateAge(1990);
*/
//above is function declarations

//hosting is not work in function expressions
//below is function expressiona

/*retirement(1956);
var retirement = function(year)
{
	console.log(65 - (2016 - year));
}*/

//variables 
/*
console.log(age); //op is undefined
var age = 23;
console.log(age); //op is 23

function foo()
{
	var age = 65;
	console.log(age);
}
foo();
console.log(age);
*/



/////// Scoping 
/* 
var a='Hello!'; //global scope
first();

function first() // first scope
{
	var b = 'Hi!';
	second();

	function second()  // second scope
	{
		var c = 'Hey!';
		console.log(a + b + c);
	}
} 
*/
// called scope chain


// difference between execution stack and scope chain

/*
 var a='Hello!'; //global scope
first();

function first() // first scope
{
	var b = 'Hi!';
	second();

	function second()  // second scope
	{
		var c = 'Hey!';
		third();
		//console.log(a + b + c);
	}
}
function third(){
	var d = 'John';
	//console.log(a + b + c + d); //in this op b is not define
	console.log(a + d);
}
*/


///////// The This keyword

//console.log(this);
 
/*calculateAge(1985);

function calculateAge(year){
	console.log(2016 - year);
	console.log(this);
}*/

var john = {
	name: 'John',
	yearOfBirth: 1990,
	calculateAge: function(){
		console.log(this);
		console.log(2016 - this.yearOfBirth);

		/*
		function innerFunction(){
			console.log(this);
		}
		innerFunction();
		*/
	}
}

john.calculateAge();

var mike = {
	name: 'Mike',
	yearOfBirth: 1984
};

mike.calculateAge = john.calculateAge;
//in above line we borrow the john method.
mike.calculateAge(); 