<?php include('header.php'); ?>
<h4>The rest '...' Opeator</h4>
<ul>
    <li>Rest mean the remaining things.</li>
    <li>Rest operator creates an array of remaining elements.</li>
    <li>Rest operator is a collection of remaining elements into an array.</li>
    <li>Rest operator is used to collect the remaining elements and pack them into an array.</li>
    <li>rest parameters must apper at the end of the argument list.</li>

</ul>
<?php include('footer.php'); ?>



Beware! You Cannot Use “use strict” Inside a Function Containing a Rest Parameter
Keep in mind that you cannot use the “use strict” directive inside any function containing a rest parameter, default parameter, or destructuring parameter. Otherwise, the computer will throw a syntax error.

// Define a function with one rest parameter:
function printMyName(...value) {
  "use strict";
  return value;
}

// The definition above will return:
"Uncaught SyntaxError: Illegal 'use strict' directive in function with non-simple parameter list"

But suppose you need your function to be in strict mode while also using the rest parameter. In such a case, you can write the “use strict” directive outside the function.

Here’s an example:

// Define a “use strict” directive outside your function:
"use strict";

// Define a function with one rest parameter:
function printMyName(...value) {
  return value;
}

// Invoke the printMyName function while passing two arguments to its parameters:
printMyName("Oluwatobi", "Sofela");

// The invocation above will return:
["Oluwatobi", "Sofela"]

How the Rest Operator Works in a Destructuring Assignment
The rest operator typically gets used as a prefix of the destructuring assignment’s last variable.

Here’s an example:

// Define a destructuring array with two regular variables and one rest variable:
const [firstName, lastName, ...otherInfo] = [
  "Oluwatobi", "Sofela", "CodeSweetly", "Web Developer", "Male"
];

// Invoke the otherInfo variable:
console.log(otherInfo); 

// The invocation above will return:
["CodeSweetly", "Web Developer", "Male"]
Try it on StackBlitz

The rest operator (...) instructs the computer to add the rest of the user-supplied values into an array. Then, it assigns that array to the otherInfo variable.

As such, you may call ...otherInfo a rest variable.

Here’s another example:

// Define a destructuring object with two regular variables and one rest variable:
const { firstName, lastName, ...otherInfo } = {
  firstName: "Oluwatobi",
  lastName: "Sofela", 
  companyName: "CodeSweetly",
  profession: "Web Developer",
  gender: "Male"
}

// Invoke the otherInfo variable:
console.log(otherInfo);

// The invocation above will return:
{companyName: "CodeSweetly", profession: "Web Developer", gender: "Male"}
In the snippet above, notice that the rest operator assigned a properties object — not an array — to the otherInfo variable.

In other words, whenever you use rest in a destructuring object, the rest operator will produce a properties object.
However, if you use rest in a destructuring array or function, the operator will yield an array literal.

