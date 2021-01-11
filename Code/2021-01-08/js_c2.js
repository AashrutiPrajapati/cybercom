/* JS Challange 2. */

//chalculate the avg score for both team.
var johnTeamAvg = (89+120+103)/3; //104
var mikeTeamAvg = (116+94+123)/3;  //111

console.log("Match between JohnTeam and MikeTeam ");

if (johnTeamAvg > mikeTeamAvg) 
	{ console.log("John Team wins : " + johnTeamAvg); }
else 
	{ console.log("Mike Team wins : " + mikeTeamAvg); }

console.log("Now change the score of both John team and Mike team!!!");

// again calculate average .
var JohnTeamAvg = (112+88+130)/3; //110
var MikeTeamAvg = (90+121+104)/3; //105

if (JohnTeamAvg > MikeTeamAvg) 
	{ console.log("John Team wins : " + JohnTeamAvg); }
else 
	{ console.log("Mike Team wins : " + MikeTeamAvg); }

console.log("Now adding Mary's team average.");

var maryTeamAvg = (97+134+105)/3; //112

if (johnTeamAvg > mikeTeamAvg && johnTeamAvg > maryTeamAvg) 
 	{ console.log("John's team Wins :" + johnTeamAvg); }
else if (mikeTeamAvg > johnTeamAvg && mikeTeamAvg > maryTeamAvg)
 	{ console.log("Mike's team Wins :" + mikeTeamAvg); } 
else if (maryTeamAvg > johnTeamAvg && maryTeamAvg > mikeTeamAvg)
	{ console.log("Mary's team Wins :" + maryTeamAvg); }
else if (johnTeamAvg == mikeTeamAvg && johnTeamAvg >maryTeamAvg)
	{ console.log("John's and Mike's teams are Wins : " + johnTeamAvg); }
else if (johnTeamAvg == maryTeamAvg && johnTeamAvg > mikeTeamAvg)
    { console.log("John's and Mary's teams are Wins :" + johnTeamAvg); }
else if (mikeTeamAvg == maryTeamAvg && mikeTeamAvg > johnTeamAvg)
	{ console.log("Mike's and Mary's teams are Wins :" + mikeTeamAvg); } 
else
	{ console.log("All three teams are winning."); }


console.log("Now change the score of all three teams!!!");

var johnTeamAvg = (114+96+123)/3 //111
var mikeTeamAvg = (118+121+94)/3 //111
var maryTeamAvg = (90+120+105)/3 //105

if (johnTeamAvg > mikeTeamAvg && johnTeamAvg > maryTeamAvg) 
 	{ console.log("John's team Wins :" + johnTeamAvg); }
else if (mikeTeamAvg > johnTeamAvg && mikeTeamAvg > maryTeamAvg)
 	{ console.log("Mike's team Wins :" + mikeTeamAvg); } 
else if (maryTeamAvg > johnTeamAvg && maryTeamAvg > mikeTeamAvg)
	{ console.log("Mary's team Wins :" + maryTeamAvg); }
else if (johnTeamAvg == mikeTeamAvg && johnTeamAvg >maryTeamAvg)
	{ console.log("John's and Mike's teams are Wins : " + johnTeamAvg); }
else if (johnTeamAvg == maryTeamAvg && johnTeamAvg > mikeTeamAvg)
    { console.log("John's and Mary's teams are Wins :" + johnTeamAvg); }
else if (mikeTeamAvg == maryTeamAvg && mikeTeamAvg > johnTeamAvg)
	{ console.log("Mike's and Mary's teams are Wins :" + mikeTeamAvg); } 
else
	{ console.log("All three teams are winning."); }

