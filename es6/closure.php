<?php include('header.php'); ?>
<ul>
    <li>An inner function can access variables and parameters of their parent functions, as well as global variables.</li>
    <li>Closure is used to store updated value. see the second example</li>
    <li>Inner function does not have a separate copy of outer variables, it has the refrence of outer variables. it means the value of outer variable is changed if you changed it using inner function.</li>
    <li>Closure is useful in hiding the implementation details. in other words it is useful to create private variables and functions. It is like abstraction from OOPS.</li>
    <li><?php echo example_with_output('examples/closure/example-1.html'); ?></li>
    <li><?php echo example_with_output('examples/closure/example-2.html'); ?></li>
</ul>
<?php 
$links[] = 'https://www.javascripttutorial.net/javascript-closure/';
echo refrences($links);
include('footer.php'); 
?>