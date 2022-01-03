<?php include('header.php'); ?>
<ul>
    <li>javascript is a synchronous programming language, means all the operations executes from top to bottom.</li>
    <li>In synchronous programming next task does not start untill first task is complete, while in asynchronous programming next task doesn't wait for response of first task.</li>
    <li>Every browser has their own javascript engine, which execute the script and show the output.</li>
    <li>Javascript execution contexts is an enviroment in which javascript code is executed.</li>
    <li>When a JavaScript engine executes an script, it creates execution contexts. Each execution context has two phases: the creation phase and the execution phase.</li>
    <li>
        <h4>Creation Phase : in creation phase javscript engine crate memory heap for variables and functions, with initial "undefined" value.</h4>
        <ul>
            <li>before executing any code javascript engine creates a global execution context. javascript engine move all the global variables and functions to the global execution context. global variables and global functions means that are not in any functions. global execution is assciated with global object like window object.</li>
            <li>Create "this" binding to the global object.</li>
            <li>Create a memory heap for variables with initial "undefined" value.</li>
            <li>Create a memory heap for function declaration.</li>
        </ul>
    </li>
    <li>
        <h4>Execution Phase</h4>
        <ul>
            <li>in execution phase javascript engine execute the code line by line and assign the values to the variable, and execute the functions.</li>
            <li>when a function executes javascript engine creates a fuction execution context.</li>
            <li>fuction execution context is similar to global execution context, but instead of creating global object, it creates argument objects.</li>
        </ul>
    </li>
</ul>
<?php
$links[] = 'https://www.javascripttutorial.net/javascript-execution-context/';
echo refrences($links);
include('footer.php'); 
?>