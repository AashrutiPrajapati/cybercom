// Function constructor 
/*****
var john = {
	name: "john",
	yearOfBirth: 1990,
	job: 'teacher',
};

var Person = function (name, yearOfBirth, job){
	this.name = name;
	this.yearOfBirth = yearOfBirth;
	this.job = job;
	this.calcAge = function()
	{
		console.log(2018 - this.yearOfBirth);
	};
}

var john = new Person('John', 1990, 'teacher');

john.calcAge();

Person.prototype.calcAge = function()
	{
		console.log(2018 - this.yearOfBirth);
	};

var mily = new Person('Mily', 1999, 'designer');
var mike = new Person('Mike', 1996, 'retired');

mily.calcAge();
mike.calcAge();

Person.prototype.lastName = 'Smith';
console.log(john.lastName);
console.log(mily.lastName);
*/

//Object.create
/*
var personProto = {
	calcAge: function(){
		console.log(2018 - this.yearOfBirth);
	}
};

var john = Object.create(personProto);
john.name = 'John';
john.yearOfBirth = 1990;
john.job = 'teacher';

var mily = Object.create(personProto, {
	name: {value: 'Mily'},
	yearOfBirth: {value: 1999},
	job: {value: 'designer'}
});
*/

//Primitives vs Objects
/*
var a = 17;
var b = a;
a = 49;
console.log(a);  //49
console.log(b);  //17

var obj1 = {
	name: 'John',
	age: 27
};
var obj2 = obj1;
obj1.age = 30;
console.log(obj1.age);
console.log(obj2.age);

//Functions
var age = 27;
var obj = {
	name: 'Mily',
	city: 'Lisbon'
};
function change(a,b){
	a = 30;
	b.city = 'San Francisco';
}
change(age, obj);
console.log(age);
console.log(obj.city);
*/

////////////////////
//Passing fun. as arguments

var year = [1990, 1965, 1989, 2005, 1998];
function arrayCalc(arr, fn){
	var arrRes = [];
	for (var i=0; i<arr.length; i++){
		arrRes.push(fn(arr[i]));
	}
	return arrRes;
}

function calcAge(el){
	return 2016 - el;
}
var ages = arrayCalc(year, calcAge); //function in arg
console.log(ages);

function isFullAge(el){
	return el >= 18;
}
var fullAges = arrayCalc(ages, isFullAge);
console.log(fullAges);  //ans in true false

function maxHeartRate(el){
	if (el >= 18 && el <= 81)
		return Math.round(206.9 - (0.67 * el));
	else
		return -1;
}
 var rates = arrayCalc(ages, maxHeartRate);
 console.log(rates);
