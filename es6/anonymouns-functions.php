<?php include('header.php'); ?>
<ul>
    <li>An anonymous function can not be hoisted.</li>
    <li>An anonymous function can be useful for creating IIFE(Immediately Invoked Function Expression).</li>
    <li>An anonymous function is not accessible after its initial creation, it can only be accessed by a variable it is stored in as a function as a value.</li>
</ul>
<?php 
$links[] = 'https://www.codecademy.com/learn/game-dev-learn-javascript-higher-order-functions-and-iterators/modules/game-dev-learn-javascript-iterators/cheatsheet';
$links[] = 'https://www.geeksforgeeks.org/difference-between-first-class-and-higher-order-functions-in-javascript';
echo refrences($links);
include('footer.php'); 
?>