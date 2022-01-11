<?php include('header.php'); ?>
<ul>
    <li>parameters</li>
    <li>arguments</li>
    <li>parameter vs argumens</li>
    <li>A function that recieved another function an argument or return a function called higher order function.</li>
    <li>A higher order function is a function that accepts function as a parameter and / or return a function.</li>
    <li>
        Highter order functions example : 
        <ul>
            <li><a href="map-function.php">Map function</a></li>
            <li><a href="filter-function.php">Filter function</a></li>
            <li><a href="reduce.php">Reduce function</a></li>
            <li><a href="foreach.php">Foreach function</a></li>
            <li><a href="sort.php">Sort function</a></li>
        </ul>
    </li>
</ul>
<?php 
$links[] = 'https://www.codecademy.com/learn/game-dev-learn-javascript-higher-order-functions-and-iterators/modules/game-dev-learn-javascript-iterators/cheatsheet';
$links[] = 'https://www.geeksforgeeks.org/difference-between-first-class-and-higher-order-functions-in-javascript';
echo refrences($links);
include('footer.php'); 
?>