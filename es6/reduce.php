<?php include('header.php'); ?>
<ul>
    <li>Map function create a new array by calling a function on every element.</li>
    <li>Map function returns a new array.</li>
    <li>Map function does not modified the original array.</li>
</ul>
<?php 
$links = array();
$links[] = 'https://www.javascripttutorial.net/javascript-closure/';
$links[] = 'https://www.w3schools.com/jsref/jsref_map.asp';
echo refrences($links);
include('footer.php'); 
?>