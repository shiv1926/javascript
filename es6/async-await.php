<?php include('header.php'); ?>
<ul>
    <li>Whenever we work with promise, we do two things, first we produce a promise and second we consume the promise. when we consume nested "then" method, it may more complex, to reduce that complexity we use "async/await" concept. </li>
    <li>when we add "async" word before function it means this function must have to return a promise, not the value.</li>
    <li>Async/Await doesn't help in promise production, it help us with promise cunsumption.</li>
    <li>async/await makes promises easier to write.</li>
    <li>Callback, async/await allow asynchronous task to be structured in synchronous way.</li>
    <li>Async keyword before a function, makes the function to return promise.</li>
    <li>await keyword before a function, makes the fuctiion to wait for promise. </li>
</ul>
<?php 
$links = array();
$links[] = 'https://davidwalsh.name/async-await';
$links[] = 'https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Asynchronous/Async_await';
echo refrences($links);
include('footer.php'); 
?>