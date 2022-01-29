<?php include('header.php'); ?>
<ul>
    <li>An inner function can access variables and parameters of their parent functions, as well as global variables.</li>
    <li>Inner function does not have a separate copy of outer variables, it has the refrence of outer variables. it means the value of outer variable is changed if you changed it using inner function.</li>
    <li><?php echo example_with_output('examples/closure/example-1.html'); ?></li>
</ul>
<?php 
$links[] = 'https://www.freecodecamp.org/news/javascript-closure-lexical-scope/';
echo refrences($links);
include('footer.php'); 
?>