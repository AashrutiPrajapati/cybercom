/***************************
* Challange 4 : find BMIs using objects and methods.
*/

var mark = {
  fullName: 'Mark Jeckson',  
  mass: 60,
  height: 1.23,
  calcBMI: function(){
    mark.BMI = mark.mass / (mark.height * mark.height);  //calculate BMI for Mark
    return mark.BMI;

  }
};
mark.calcBMI();
console.log(mark);

var john = {
  fullName: 'John Smith', 
  mass: 65,
  height: 1.32,
  calcBMI: function(){
    john.BMI = john.mass / (john.height * john.height); //calculate BMI for John
    return john.BMI;
  }
};
john.calcBMI();
console.log(john);

//Check who's BMI is higher and print name .
if(mark.calcBMI() > john.calcBMI())
{
  console.log(mark.fullName + ' has a higher BMI, BMI : ' + mark.calcBMI());
}
else if(mark.calcBMI() < john.calcBMI())
{
  console.log(john.fullName + ' has a higher BMI, BMI : ' + john.calcBMI());
} 
else 
{
  console.log(mark.fullName + ' and ' + john.fullNname + ' has the same BMI');
}