// JavaScript Document
var myarray=new Array();
myarray=[1,2,3,4,5,6,7,8,9,[11,12,13,14]];
/*alert(myarray[9][0]);*/

total=0;
for(var i=0;i<9;i++)
{
	total=total+myarray[i];
}
/*alert(total);*/

function getUpperCase(name)
{
	uname=name.toUpperCase();
	alert(uname);
}

getUpperCase('lokesh');
getUpperCase('yadav');
getUpperCase('shivkumar');
