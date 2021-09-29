<?php include('header.php'); ?>
<ul>
    <li>There are two ways to wrap an string i.e. single quotes ('') and double quotes ("").</li>
    <li>We use ( + ) opeator to concat two strings.</li>
    <li>Using both the ways, it is difficult to
        <ul>
            <li>escape the quotes symbol from the string.</li>
            <li>write the expression (functions call, variables, object, array ) in the string.</li>
            <li>write multiline strings.</li>
            <li>format an string, i.e. adding space between words, or adding a new line.</li>
        </ul>
    </li>
</ul>
<h4>ES6</h4>
<ul>

    <li>In ES6, we use backticks (`) to wrapping the string or text.</li>
    <li class="example">let simple = `This is a template literal`;</li>
    <li>ES6 provide a powerful feature i.e. placeholder</li>
    <li class="example">$(variable_name)</li>
    <li class="example_table">
        <?php 
        
        ?>
    </li>
</ul>

<?php 
$links[] = 'https://www.geeksforgeeks.org/javascript-template-literals/';
echo refrences($links);
include('footer.php'); 
?>