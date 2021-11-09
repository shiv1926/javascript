<?php include('header.php'); ?>
<ul>
    <li>There are two ways to wrap an string i.e. single quotes ('') and double quotes ("").</li>
    <li>We use ( + ) opeator to concat two strings.</li>
    <li>Using both the ways, it is difficult to
        <ul>
            <li>escape the quotes symbol from the string. For this we use escape charector.</li>
            <li>write the expression (functions call, variables, object, array ) in the string.</li>
            <li>write multiline strings.</li>
            <li>format an string, i.e. adding space between words, or adding a new line.</li>
        </ul>
    </li>
</ul>
<?php 
$links[] = 'https://www.computerhope.com/jargon/v/variable.htm';
$links[] = 'https://launchschool.com/books/ruby/read/variables#whatisavariable';
echo refrences($links);
include('footer.php'); 
?>