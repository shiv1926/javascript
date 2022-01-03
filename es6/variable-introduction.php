<?php include('header.php'); ?>
<ul>
    <li>variable declaration</li>
    <li>variable assignment</li>
    <li>declaration and assignment at the same time</li>
    <li>javascript follows lexical scoping i.e. a variable define outside of a function is automatically available inside a function.</li>
    <li>if we do not use any keyword (var,let or const) before variable it becomes a global variable. we should always define a variable before assigning.</li>
</ul>
<?php 
$links[] = 'https://www.computerhope.com/jargon/v/variable.htm';
$links[] = 'https://launchschool.com/books/ruby/read/variables#whatisavariable';
echo refrences($links);
include('footer.php'); 
?>