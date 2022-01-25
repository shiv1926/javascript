<?php include('header.php'); ?>
<ul>
    <li>With HTML5, we get two new boolean attributes for the script tag are async and defer. Async allows execution of scripts asynchronously and defer allows execution only after the whole document has been parsed.</li>
    <li>These two attributes are a must for increasing speed and performance of websites. They allow the elimination of render-blocking JavaScript where the page would have to load and execute scripts before finishing to render the page. Here’s a usage example:</li>
    <li>
        <strong>Async vs Defer</strong>
        <p>With async, the file gets downloaded asynchronously and then executed as soon as it’s downloaded.</p>
        <p>With defer, the file gets downloaded asynchronously, but executed only when the document parsing is completed. With defer, scripts will execute in the same order as they are called. This makes defer the attribute of choice when a script depends on another script. For example, if you’re using jQuery as well as other scripts that depend on it, you’d use defer on them (jQuery included), making sure to call jQuery before the dependent scripts.</p>
        <p>A good strategy is to use async when possible, and then defer when async isn’t an option.</p>
    </li>
    <li>
        <p>The async and defer attribute is only for external scripts</p>
        <p>The async and defer attribute is ignored if the <?php echo htmlspecialchars('<script>'); ?> tag has no attribute src.</p>
    </li>
    <li>Scripts can’t see DOM elements below them, so they can’t add handlers etc.</li>
    <li>If there’s a bulky script at the top of the page, it “blocks the page”. Users can’t see the page content till it downloads and runs:</li>
    <li>When the browser loads HTML and comes across a <?php echo htmlspecialchars('<script>...</script>'); ?> tag, it can’t continue building the DOM. It must execute the script right now. The same happens for external scripts <?php echo htmlspecialchars('<script src="..."></script>'); ?>: the browser must wait for the script to download, execute the downloaded script, and only then can it process the rest of the page.</li>


</ul>
<?php 
$links[] = 'https://flaviocopes.com/javascript-async-defer/';
$links[] = 'https://javascript.info/script-async-defer';
$links[] = 'https://www.growingwiththeweb.com/2014/02/async-vs-defer-attributes.html';
echo refrences($links);
include('footer.php'); 
?>