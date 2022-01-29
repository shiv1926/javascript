<?php include('header.php'); ?>
<h4>Immediate invoke funciton expression / self execute function</h4>
<ul>
    <li>The code inside a function does not execute untill the function is called. Almost every programming language used () brackets, to execute a function.</li>
    <li>IIFE is a function that run as soon as it is defined, i.e. it executes only once when they defined.</li>
    <li>It is a similar concept to singleton pattern of oops. </li>
    <li>named or anonymous function both can be used to create IIFE.</li>
</ul>
<?php 
$links[] = 'https://www.tutorialsteacher.com/javascript/immediately-invoked-function-expression-iife';
$links[] = 'https://developer.mozilla.org/en-US/docs/Glossary/IIFE';
$links[] = 'https://www.codeproject.com/Articles/1110916/JavaScript-IIFE-Design-Pattern';
$links[] = 'https://www.geeksforgeeks.org/javascript-immediately-invoked-function-expressions-iife/';
$links[] = 'https://stackoverflow.com/questions/37021349/benefit-of-immediately-invoked-function-expression-iife-over-a-normal-function';
$links[] = 'https://en.wikipedia.org/wiki/Immediately_invoked_function_expression';
echo refrences($links);
include('footer.php'); 
?>