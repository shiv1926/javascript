// JavaScript Document
var myobject=new Object();
myobject={'firstname':'shivkumar','lastname':'yadav','designation':'developer','address':{'colony':'veena nagar','city':'Indore','state':'MP'}};
alert(myobject.address.city);
/* ======================================================================================== */
alert(myobject["firstname"]);
/* ======================================================================================== */

console.log(myobject);
/* ======================================================================================== */

for(var single in myobject)
{
	alert(myobject[single]);
}
/* ======================================================================================== */
