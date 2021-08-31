<?php include('header.php'); ?>
<ul>
    <li>By default Operations in JavaScript are synchronous and execute from top to bottom.</li>
    <li>by default all requests are synchronous request.</li>
    <li>Synchronous request blocks the client untill opeation is not get completed. browser become unresponsive, javascript engine of browser is get blocked.</li>
    <li>In synchronous programming next task does not start untill first task is complete, while in asynchronous programming next task doesn't wait for response.</li>
    <li>Synchronous operations in JavaScript entails having each step of an operation waits for the previous step to execute completely. This means no matter how long a previous process takes, subsquent process won't kick off until the former is completed. Asynchronous operations, on the other hand, defers operations. Any process that takes a lot of time to process is usually run alongside other synchronous operation and completes in the future.</li>
    <li>This lesson dwells on fundamental concepts that JavaScript relies on to handle asynchronous operations. These concepts include: Callback functions, Promises and the use of Async and Await to handle deferred operations in JavaScript.</li>
</ul>
<?php include('footer.php'); ?>

which functions comes uner asynchronous category.
setTimeOut
