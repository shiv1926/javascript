<?php include('header.php'); ?>
<ul>
    <li>Immediate invoke funciton expression / self execute function</li>
    <li>IIFE is a function that run as soon as it is defined</li>
    <li>Functions are used for data privacy.</li>
    <li>It is a similar concept to singleton pattern of oops. </li>
</ul>
<?php 
$links[] = 'https://developer.mozilla.org/en-US/docs/Glossary/IIFE';
$links[] = 'https://www.codeproject.com/Articles/1110916/JavaScript-IIFE-Design-Pattern';
$links[] = 'https://www.geeksforgeeks.org/javascript-immediately-invoked-function-expressions-iife/';
echo refrences($links);
include('footer.php'); 
?>