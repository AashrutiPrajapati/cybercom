/***************
* Challange 3 : restaurants bills. 
*/

var billsBeforeTip = [124, 48, 268]; 
var tipAmounts = [ ];  //for tip 
var finalAmounts = [ ]; //for final amounts of bills.

//now create function for finding tip. 
function tipCalculator(billAmount)
{
  var percentage;
  if ( billAmount <= 50) 
  {  
        percentage = 0.2;  
  }
  else if (50 < billAmount  && billAmount <= 200) 
  {  
      percentage = 0.15; 
  }
  else 
  {  
    percentage = 0.1; 
  }
  return percentage *  billAmount;
}

for (i = 0; i < billsBeforeTip.length; i++)
{
  tipAmounts[i] = tipCalculator(billsBeforeTip[i]);
  finalAmounts[i] = billsBeforeTip[i] + tipAmounts[i];
  //console.log([i] + ') total tip: ' + tipAmounts[i]);
}

console.log('Bills before tips: ' + billsBeforeTip.toString());
console.log('Final Amounts: ' + finalAmounts.toString());
