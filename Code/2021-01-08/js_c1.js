
var Mark_mass=60,Mark_height=1.2,Mark_BMI;
var John_mass=65,John_height=1.3,John_BMI;

//Count the BMI for Mark and John. 
Mark_BMI = Mark_mass / (Mark_height * Mark_height);
John_BMI = John_mass / (John_height * John_height);

//Compare the BMI. 
var check_BMI=Boolean(Mark_BMI > John_BMI);
console.log("Is Mark's BMI higher than John's BMI? "+ check_BMI);

