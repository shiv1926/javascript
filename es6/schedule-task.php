<?php include('header.php'); ?>
<ul>
    <li>JavaScript code is generally executed synchronously. But there are some JavaScript native functions (timers) which allow us to delay the execution of arbitrary instructions.

These two methods for it are ::-
1. setTimeout()
2. setInterval()

-- setTimeout() ::-
The setTimeout() function is commonly used if you wish to run your function a specified number of milliseconds from when the setTimeout() method was called. The general syntax of the method is:
setTimeout ( expression, timeout );

-- setInterval() ::-
The setInterval() function, as the name suggests is commonly used to set a delay for functions that are executed again and again like animations. The setInterval() function is very closely related to setTimeout() - they even have same syntax:
setInterval ( expression, interval );

Thanks for following Us and if you haven't followed us yet. So please follow us @developers_community_._ for amazing web development projects and knowledge related to web dev.

if we decide to execute a funtion after certain time, we have to method for this

setTimeout
setTimeInterval 

    </li>
</ul>
<?php 
$links[] = 'https://www.tutorialsteacher.com/javascript/immediately-invoked-function-expression-iife';
$links[] = 'https://developer.mozilla.org/en-US/docs/Glossary/IIFE';
echo refrences($links);
include('footer.php'); 
?>