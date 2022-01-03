<?php include('header.php'); ?>
<h4>The rest '...' Opeator</h4>
<ul>
    <li>Rest mean the remaining things.</li>
    <li>Rest operator creates an array of remaining elements.</li>
    <li>Rest operator is used to collect the remaining elements and pack them into an array.</li>
    <li>rest parameters must apper at the end of the argument list.</li>
    <li>Beware! You Cannot Use “use strict” Inside a Function Containing a Rest Parameter</li>
    <li>
      <div>Keep in mind that you cannot use the “use strict” directive inside any function containing a rest parameter, default parameter, or destructuring parameter. Otherwise, the computer will throw a syntax error.</div>
      <div>Define a function with one rest parameter:</div>
      function printMyName(...value) {
        "use strict";
        return value;
      }
      <div>The definition above will return:</div>
      <div>"Uncaught SyntaxError: Illegal 'use strict' directive in function with non-simple parameter list"</div>
    </li>
    <li>
      <div>But suppose you need your function to be in strict mode while also using the rest parameter. In such a case, you can write the “use strict” directive outside the function.</div>
      <div>Here’s an example:</div>
      <div>Define a “use strict” directive outside your function:</div>
      <div>"use strict";</div>
      <div>Define a function with one rest parameter:</div>
      <div>
      function printMyName(...value) {
        return value;
      }
      </div>
      <div>Invoke the printMyName function while passing two arguments to its parameters:</div>
      <div>printMyName("Oluwatobi", "Sofela");</div>
      <div>The invocation above will return:</div>
      <div>["Oluwatobi", "Sofela"]</div>
    </li>
    <li>
    <div>How the Rest Operator Works in a Destructuring Assignment</div>
    <div>The rest operator typically gets used as a prefix of the destructuring assignment’s last variable.</div>
    <div>Here’s an example:</div>
    <div>Define a destructuring array with two regular variables and one rest variable:</div>
    <div>const [firstName, lastName, ...otherInfo] = ["Oluwatobi", "Sofela", "CodeSweetly", "Web Developer", "Male"];</div>
    <div>Invoke the otherInfo variable:</div>
    <div>console.log(otherInfo);</div>
    <div>The invocation above will return:</div>
    <div>["CodeSweetly", "Web Developer", "Male"]</div>
    <div>The rest operator (...) instructs the computer to add the rest of the user-supplied values into an array. Then, it assigns that array to the otherInfo variable.</div>
    </li>
    <li>
    <div>Here’s another example:</div>
    <div>Define a destructuring object with two regular variables and one rest variable:</div>
    <div>const { firstName, lastName, ...otherInfo } = {firstName: "Oluwatobi",lastName: "Sofela", companyName: "CodeSweetly",profession: "Web Developer",gender: "Male"}</div>
    <div>Invoke the otherInfo variable:</div>
    <div>console.log(otherInfo);</div>
    <div>The invocation above will return:</div>
    <div>{companyName: "CodeSweetly", profession: "Web Developer", gender: "Male"}</div>
    <div>In the snippet above, notice that the rest operator assigned a properties object — not an array — to the otherInfo variable.</div>
    </li>
    <li>In other words, whenever you use rest in a destructuring object, the rest operator will produce a properties object.
    However, if you use rest in a destructuring array or function, the operator will yield an array literal.</li>
</ul>
<?php include('footer.php'); ?>