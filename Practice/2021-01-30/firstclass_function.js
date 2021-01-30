/*******************************
*Functions returning functions*/

/*
function interviewQue(job){
	if (job === 'designer'){
		return function(name){
			console.log(name + ', can you please explain what UX design is?');
		}
	}
	else if (job == 'teacher'){
		return function(name){
			console.log('what subject do you teach, ' + name + ' ?');
		}
	}
	else{
		return function(name){
			console.log(name + 'Hello ' + name + ', what do you do?');
		}
	}
}

var teacherQue = interviewQue('teacher');
teacherQue('John');

var designerQue = interviewQue('designer');
designerQue('John');
designerQue('Mike');

interviewQue('teacher')('Mily');
*/


//////////////////////////
//IIFE: Immediately Invoked Function Expressions

/*
function game(){
	var score = Math.random() * 10;
	console.log(score >= 5);
}
game();


(function () {
	var score = Math.random() * 10;
	console.log(score >= 5);
})();


(function (goodLuck) {
	var score = Math.random() * 10;
	console.log(score >= 5 - goodLuck);
})(5);
*/

////////////////////////
//Closures :

function retirement(retAge){
	var a = ' years left until retirement.';
	return function(yearOfBirth){
		var age = 2018 - yearOfBirth;
		console.log((retAge - age) + a);
	}
}

var retirementUS = retirement(66);
retirementUS(1990);
//or also write in another formate
//retirement(65)(1990);
var retirementGermany = retirement(65);
var retirementIceland = retirement(67);
retirementGermany(1990);
retirementIceland(1990);


////using closures code for interviewQuestions code
function interviewQuestion(job){
	return function(name){
		if (job === 'designer'){
			console.log(name + ', can you please explain what UX design is?');

		}
		else if (job === 'teacher'){
			console.log('what subject do you teach, ' + name + ' ?');

		}
		else {
			console.log(name + 'Hello ' + name + ', what do you do?');
		}

	}
}
interviewQuestion('teacher')('John');



///////////////////////////////
//Bind, call and apply

var john = {
	name: 'John',
	age: 26,
	job: 'teacher',
	presentation: function(style, timeOfDay){
		if (style === 'formal'){
			console.log('Good ' + timeOfDay + ', Ladies and gentlemen!! I am ' + this.name + ' I am a ' + this.job + ' and I am ' + this.age + ' years old. Have a nice ' + timeOfDay + '.');
		}
		else if (style === 'friendly'){
			console.log('Hello! what\'s up? I am ' + this.name + ', I am a ' + this.job + ' and I am ' + this.age + ' years old. Have a nice ' + timeOfDay + '.');
		}
	}
};

var mily ={
	name: 'Mily',
	age: 35,
	job: 'designer'
};

john.presentation('formal', 'morning');
john.presentation.call(mily, 'friendly', 'afternoon');

var johnFriendly = john.presentation.bind(john, 'friendly');
johnFriendly('morning');
johnFriendly('night');

var milyFormal = john.presentation.bind(mily, 'formal');
milyFormal('morning');



////bind in array
var years = [1990, 1965, 1938, 2005];
function arrCalc(arr, fn){
	var arrRes = [];
	for (var i=0; i<arr.length; i++){
		arrRes.push(fn(arr[i]));
	}
	return arrRes;
}

function calcAge(el){
	return 2018 - el;
}

function isFullAge(limit, el){
	return el >= limit;
}

var ages = arrCalc(years, calcAge);
var fullJapan = arrCalc(ages, isFullAge.bind(this, 20));

console.log(ages);
console.log(fullJapan);