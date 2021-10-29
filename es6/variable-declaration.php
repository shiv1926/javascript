<?php include('header.php'); ?>
<h2>Variable Declaration</h2>
<ul>
<li>Until ES5, the only way to declare a variable was to use the var keyword. ES6 introduced two more ways to declare variables, using the let and const keywords. Using these modern keywords gives us more predictability and fewer chances of introducing bugs in the code.</li>
<li>The var Keyword : A variable declared with var is function scoped. This means we will get a ReferenceError when we try to access the variable outside of the function.</li>
<li class="example">
<pre>
var x = 10;
function someFunc()
{
   var y = 10;
   console.log('inside someFunc', x, y);
}
</pre>
<li>Now, if you call someFunc(), it will log : inside someFunc 10 10
But if you try accessing the variable y outside of sumFunc(), you will get the following error : Uncaught ReferenceError: y is not defined</li>
<li>The let keyword : let is block scoped. This is the main difference between let and var. Take this function where we loop using a for loop and access the variable i inside and outside of the loop.
function letsLoop() 
{
   for (var i=0; i<5; i++) 
   {
      console.log('i inside the loop: ', i);
   }
   console.log(' i outside of loop', i); 
}
When you call the function letsLoop(), the output will be this: 
i inside the loop: 0 
i inside the loop: 1 
i inside the loop: 2 
i inside the loop: 3 
i inside the loop: 4 
i outside of loop 5 
Now, let's change the keyword var to let while declaring and assigning the variable i. 
function letsLoop() 
{ 
   for (let i=0; i<5; i++) 
   { 
      console.log('i inside the loop: ', i);
   }
   console.log(' i outside of loop', i); 
}
If you execute the letsLoop() function now, you will get a ReferenceError while accessing the variable i outside of the for loop. It is because the visibility and accessibility (or scope) of the variable i is limited to the for block. i inside the loop: 0 i inside the loop: 1 i inside the loop: 2 i inside the loop: 3 i inside the loop: 4 Uncaught ReferenceError: i is not defined at letsLoop (<anonymous>:6:35)
at <anonymous>:1:1

<li>Const Keyword : const is almost the same as let. The only difference is that once you have assigned a value to a variable defined with the const keyword, you can not reassign a new value to it.
const name = 'freeCodeCamp';
name = 'My freeCodeCamp'; // Uncaught TypeError: Assignment to constant variable.
This applies to all types of variables we can create in JavaScript. You need to be careful when it comes to a complex data structure like object. When an object is declared and assigned value with const, you can still change the value of its properties. But you can not reassign the variable another object. Please have a look:

const publication = {
'name': 'freeCodeCamp'
}

publication.name= 'My freeCodeCamp'; // Allowed

publication = {}; // Uncaught TypeError: Assignment to constant variable.
And now to compare the three keywords:

VAR LET CONST
Scope function block block
Reassigning a new value Allowed Allowed Not Allowed
When accessed before declaring undefined ReferenceError ReferenceError

<li>Don't use var anymore. Use let or const.</li>
<li>Use const more often. Use let when you need to reassign another value to a variable.</li>
<li>In a React app, you will see code using let and const very often. A React component is usually declared using const. </li>
<?php 
$links[] = 'http://es6-features.org';
$links[] = 'https://www.javascripttutorial.net/es6';
$links[] = 'https://www.geeksforgeeks.org';
$links[] = 'https://devhints.io/es6 : Cheatsheet';
echo refrences($links);
include('footer.php'); 
?>