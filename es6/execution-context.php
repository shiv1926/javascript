<?php include('header.php'); ?>
<ul>
    <li>Every browser has their own javascript engine, which execute the script and show the output.</li>
    <li>When a JavaScript engine executes a script, it creates execution contexts. Each execution context has two phases: the creation phase and the execution phase.</li>

    the enviroment in which our code is executed and evaluted
    to run javascript code we need an enviroment, this enviroment is known execution contexts.


    Global execution context by default : javascript engine creates a global execution context before executing any code.
    javascript engine move all the global variables and functions to the global execution context. global variables and global functions means that are not in any functions. global execution is assciated with global object like window object.
    when a function executes javascript engine creates a fuction execution context 



    execution stack or call stack : execution stack is LIFO structure which is used to store all the execution context.

</ul>
<?php
include('footer.php'); 
?>