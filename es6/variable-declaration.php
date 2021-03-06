<?php include('header.php'); ?>
<h2>Variable Declaration</h2>
<ul>
<li>Until ES5, the only way to declare a variable was the var keyword. ES6 introduced two more ways to declare variables, using the let and const keywords. Using these modern keywords gives us more predictability and fewer chances of introducing bugs in the code.</li>
<li><strong>The var Keyword : </strong>A variable declared with var is function scoped. This means we will get a ReferenceError when we try to access the variable outside of the function.</li>
<li class="example">
<pre>
var x = 10;
function someFunc()
{
   var y = 10;
   console.log('inside someFunc', x, y);
}
</pre>
</li>
<li>Now, if you call someFunc(), it will log : inside someFunc 10 10
But if you try accessing the variable y outside of sumFunc(), you will get the following error : Uncaught ReferenceError: y is not defined</li>
<li><strong>The let keyword : </strong>let is block scoped. This is the main difference between let and var. Take this function where we loop using a for loop and access the variable i inside and outside of the loop.
<li class="example">
<pre>
function letsLoop() 
{
   for (var i=0; i<5; i++) 
   {
      console.log('i inside the loop: ', i);
   }
   console.log(' i outside of loop', i); 
}
</pre>
</li>
<li>
   <p>When you call the function letsLoop(), the output will be this: </p>
   <div>i inside the loop: 0 </div>
   <div>i inside the loop: 1 </div>
   <div>i inside the loop: 2 </div>
   <div>i inside the loop: 3 </div>
   <div>i inside the loop: 4 </div>
   <div>i outside of loop 5 </div>
</li>
<li>Now, let's change the keyword var to let while declaring and assigning the variable i. </li>
<li class="example">
<pre>
function letsLoop() 
{ 
   for (let i=0; i<5; i++) 
   { 
      console.log('i inside the loop: ', i);
   }
   console.log(' i outside of loop', i); 
}
</pre>
<li>
   <p>If you execute the letsLoop() function now, you will get a ReferenceError while accessing the variable i outside of the for loop. It is because the visibility and accessibility (or scope) of the variable i is limited to the for block.</p>
   <div>i inside the loop: 0 </div>
   <div>i inside the loop: 1 </div>
   <div>i inside the loop: 2 </div>
   <div>i inside the loop: 3 </div>
   <div>i inside the loop: 4 </div>
   <div>Uncaught ReferenceError: i is not defined at letsLoop </div>
</li>
<li><strong>Const Keyword : </strong>const is almost the same as let. The only difference is that once you have assigned a value to a variable defined with the const keyword, you can not reassign a new value to it.
<div class="example">
<pre>
const name = 'freeCodeCamp';
name = 'My freeCodeCamp'; // Uncaught TypeError: Assignment to constant variable.
</pre>
</div>
<p>This applies to all types of variables we can create in JavaScript. You need to be careful when it comes to a complex data structure like object. When an object is declared and assigned value with const, you can still change the value of its properties. But you can not reassign the variable another object. Please have a look:</p>
<div class="example">
<pre>
const publication = {
   'name': 'freeCodeCamp'
}
</pre>
</div>
<p>publication.name= 'My freeCodeCamp'; // Allowed</p>
<p>publication = {}; // Uncaught TypeError: Assignment to constant variable.</p>
<li>
   <p>And now to compare the three keywords:</p>
   <table border="1" cellpadding="5" cellspacing="0">
      <tr><td></td><td>VAR</td><td>LET</td><td>CONST</td></tr>
      <tr><td>Scope</td><td>function</td><td>block</td><td>block</td></tr>
      <tr><td>Redeclare</td><td>undefined</td><td>ReferenceError</td><td>ReferenceError</td></tr>
      <tr><td>Reassigning a new value</td><td>Allowed</td><td>Allowed</td><td>Not Allowed</td></tr>
      <tr><td>When accessed before declaring</td><td>undefined</td><td>ReferenceError</td><td>ReferenceError</td></tr>
   </table>
</li>

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