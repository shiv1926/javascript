<?php include('header.php'); ?>
<ul>
    <li>Hoisting means call something before defining :</li>
    <li>During the creation phase, the JavaScript engine moves the variable and function declarations to the top of your code. This feature is known as hoisting in JavaScript.</li>
    <li>variable hoisting : At runtime javascript move all the variables at the top of the current scrope, this is called variable hoisting.</li>
    <li>function hoisting : At runtime javascript move all the function declarations at the top of the current scrope, this is called function hoisting, this is the reason, function can be called before defining.</li>
    <li><strong>Hoisting is not possible in "Strict" mode</strong></li>
</ul>
<?php 
include('footer.php'); 
?>
<ul>