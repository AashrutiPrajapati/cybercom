/********************
* Objects and Properties 
*/

/*
var john = {
	firstName: 'John',
	lastName: 'Smith',
	birthYear: 1990,
	family: ['Jane', 'Mark', 'Milly', 'Bob'],
	job: 'teacher',
	isMarried: false
};
console.log(john);
console.log(john.firstName);
console.log(john['lastName'])

var x = 'birthYear';
console.log(john[x]);

john.job = 'designer';
john['isMarried'] = true;
console.log(john);

//new Object syntax
var jane = new Object();
jane.name = 'Jane';
jane.birthYear = 1999;
jane['lastName'] = 'Smith';
console.log(jane);
*/


/********************************
* Objects and Methods 
*/
var john = {
	firstName: 'John',
	lastName: 'Smith',
	birthYear: 1992,
	family: ['Jane', 'Mark', 'Milly'],
	job: 'teacher',
	isMarried: false,
	calcAge: function(birthYear){
		//return 2018 - birthYear; or also written
		//return 2018 - this.birthYear;
		this.age = 2018 - this.birthYear;
	}
};
//console.log(john.calcAge(1990));  or also written below line when use this
//console.log(john.calcAge());

john.calcAge();
console.log(john);