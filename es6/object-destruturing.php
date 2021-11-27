<?php include('header.php'); ?>
<ul>
    <li>Object destructing means unpack the properties of an object into new distinct variables.</li>
    <li>Object destructuring assigns the properties of an object to variables with the same names by default.</li>
    <li></li>
    <li><h4>Nested Object</h4></li>
Objects allow us to create a single entity that stores data items by key.



Object destructuring
The destructuring assignment also works with objects.

The basic syntax is:

let {var1, var2} = {var1:…, var2:…}
variable names and properties name must be same

<li>orerwrite or change variable names in destructing</li>

Gotcha if there’s no let
In the examples above variables were declared right in the assignment: let {…} = {…}. Of course, we could use existing variables too, without let. But there’s a catch.

This won’t work:

let title, width, height;

// error in this line
{title, width, height} = {title: "Menu", width: 200, height: 100};
The problem is that JavaScript treats {...} in the main code flow (not inside another expression) as a code block. Such code blocks can be used to group statements, like this:

{
  // a code block
  let message = "Hello";
  // ...
  alert( message );
}
So here JavaScript assumes that we have a code block, that’s why there’s an error. We want destructuring instead.

To show JavaScript that it’s not a code block, we can wrap the expression in parentheses (...):

let title, width, height;

// okay now
({title, width, height} = {title: "Menu", width: 200, height: 100});

alert( title ); // Menu
</ul>
<?php include('footer.php'); ?>