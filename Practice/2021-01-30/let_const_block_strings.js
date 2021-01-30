/**************************
*Let and const*/
//ES5

var name5 = 'Jane Smith';
var age5 = 25;
name5 = 'Jane Miller';
console.log(name5);


// ES5
function driverSLicence5(passedTest){
	if (passedTest){
		var firstName = 'Mily';
		var yearOfBirth = 1990;
		console.log(firstName + ', born in ' + yearOfBirth + ', is now officially allowed to drive a car.');
	}
	//console.log(firstName + ', born in ' + yearOfBirth + ', is now officially allowed to drive a car.');
} 
driverSLicence5(true);

//ES6
function driverSLicence6(passedTest){
	if (passedTest){
		let firstName = 'John';    //write let insted of var
		const yearOfBirth = 1999;   // write const insted of var

		console.log(firstName + ', born in ' + yearOfBirth + ', is now officially allowed to drive a car.');
	}
	//console.log(firstName + ', born in ' + yearOfBirth + ', is now officially allowed to drive a car.');
} 
driverSLicence6(true);

//ES6
//another way to declared let and const which declared out of the block
function driverSLicence6(passedTest){
	let firstName;
	const yearOfBirth = 1990;
	if (passedTest){
			firstName = 'John';    //write let insted of var
	}
	console.log(firstName + ', born in ' + yearOfBirth + ', is now officially allowed to drive a car.');
} 
driverSLicence6(true);



//let use in other way
let i =23;
for (let i=0; i<5; i++){
	console.log(i);
}
console.log(i);    //i=23

var j =23;
for (var j=0; j<5; j++){
	console.log(j);
}
console.log(j);  //j=5 (different output compare to above code)


///////////////////////////////////
//Blocks and IIFEs:
//ES6
{
	const a = 1;
	let b = 2;
	var c = 3;
}
//console.log(a+b);  // not works bcz let and const has block scope
console.log(c);  //works bcz var has function scope


/////////////////////////////////////////
//Strings in ES6/ES2015

let firstName = 'Mily';
let lastName = 'Smith';
const yearOfBirth = 1990;
function calcAge(year){
	return 2016 - year;
}

//ES5
console.log('This is ' + firstName + ' ' + 
	lastName + '. Today, he is ' + 
	calcAge(yearOfBirth) + ' years old.');

//ES6
console.log(`This is ${firstName} ${lastName}. He was born in 
	${yearOfBirth}. Today he is 
	${calcAge(yearOfBirth)} years old.`);

const n = `${firstName} ${lastName}`;
console.log(n.startsWith('j'));
console.log(n.endsWith('th'));
console.log(n.includes(' '));
console.log(n.includes('ly'));
console.log(firstName.repeat(5));
console.log(`${firstName} `.repeat(5));
