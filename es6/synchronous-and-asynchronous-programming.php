<?php include('header.php'); ?>
<ul>
    <li>By default all operations in JavaScript are synchronous and execute from top to bottom.</li>
    <li>In synchronous programming next task does not start untill first task is complete, while in asynchronous programming next task doesn't wait for response of first task.</li>
    <li>Synchronous request blocks the client untill opeation is not get completed, so browser become unresponsive, javascript engine of browser is get blocked.</li>
    <li>
        <ul>
            <li><a href="<?php echo es_url('callback.php'); ?>">Callback</a></li>
            <li><a href="<?php echo es_url('callback-hell.php'); ?>">Callback Hell</a></li>
            <li><a href="<?php echo es_url('promise.php'); ?>">Promise</a></li>
            <li><a href="<?php echo es_url('async-await.php'); ?>">Asyc / Await</a></li>
            <li><a href="<?php echo es_url('aysnc-defer.php'); ?>">Async Defer</a></li>
        </ul>
    </li>
    <li>
        which functions comes uner asynchronous category : setTimeOut
    </li>
</ul>
<?php include('footer.php'); ?>