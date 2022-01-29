<?php include('header.php'); ?>
<h4>Pure function</h4>
<ul>
    <li>The function which return same output for a given input</li>
</ul>
<?php 
$links = array();
$links[] = 'https://www.geeksforgeeks.org/pure-functions-in-javascript/';
$links[] = 'https://blog.greenroots.info/what-are-pure-functions-and-side-effects-in-javascript';
echo refrences($links);
include('footer.php'); 
?>