<?php include('header.php'); ?>
<ul>
    <li>When a function is passed as an argument is known as callback functions.</li>
    <li>A callback function is a function that execute after previous function complete its execution.</li>
    <li>Callback make sure that certain code will not execute untill other code does not finish their execution.</li>
    <li>Callback is not a special thing, it is a way of using functions.</li>
    <li>When a function simply accepts another function as an argument, this contained function is known as a callback function. Using callback functions is a core functional programming concept, and you can find them in most JavaScript code; either in simple functions like setInterval, event listening or when making API calls.</li>
    <li>Javascript is an event driven programming language, this means that instead of waiting of response of an event, it keep continue listening other events.</li>
    <li>Callback functions can be named or anonymous functions.</li>
</ul>

<strong>Example</strong>
<code>
    <table border="0" cellspacing="0" cellpadding="5" width="100%">
        <tr>
            <td width="50%" valign="top">
                <ul>
                    <li>const funcA = () => {</li>
                    <li>console.log(`welcome function A`);</li>
                    <li>}</li>
                </ul>
                <ul>
                    <li>const funcB = () => {</li>
                    <li>console.log(`welcome function B`);</li>
                    <li>}</li>
                </ul>
                <ul>
                    <li>funA();</li>
                    <li>funB();</li>
                </ul>
            </td>
            <td width="50%" valign="top">
                <strong>Result will be</strong>
                <div>welcome function A</div>
                <div>welcome function B</div>
            </td>
        </tr>
    </table>
</code>
<code>
    <table border="0" cellspacing="0" cellpadding="5" width="100%">
        <tr>
            <td width="50%" valign="top">
                <ul>
                    <li>const funcA = () => {</li>
                    <li>setTimeout(fuction(){</li>
                    <li>console.log(`welcome function A`);</li>
                    <li>},3000);</li>
                    <li>}</li>
                </ul>
                <ul>
                    <li>const funcB = () => {</li>
                    <li>console.log(`welcome function B`);</li>
                    <li>}</li>
                </ul>
                <ul>
                    <li>funA();</li>
                    <li>funB();</li>
                </ul>
            </td>
            <td width="50%" valign="top">
                <strong>Result will be</strong>
                <div>welcome function B</div>
                <strong>After 3 seconds</strong>
                <div>welcome function A</div>
            </td>
        </tr>
    </table>
</code>
<code>
    <table border="0" cellspacing="0" cellpadding="5" width="100%">
        <tr>
            <td width="50%" valign="top">
                <ul>
                    <li>const funcA = () => {</li>
                    <li>setTimeout(fuction(){</li>
                    <li>console.log(`welcome function A`);</li>
                    <li>funB();</li>
                    <li>},3000);</li>
                    <li>}</li>
                </ul>
                <ul>
                    <li>const funcB = () => {</li>
                    <li>console.log(`welcome function B`);</li>
                    <li>}</li>
                </ul>
                <ul>
                    <li>funA();</li>
                </ul>
            </td>
            <td width="50%" valign="top">
                <strong>Result will be</strong>
                <strong>After 3 seconds</strong>
                <div>welcome function A</div>
                <div>welcome function B</div>
            </td>
        </tr>
    </table>
</code>
<code>
    <table border="0" cellspacing="0" cellpadding="5" width="100%">
        <tr>
            <td width="50%" valign="top">
                <p>Callback function : here we are passing a function as callback.</p>
                <ul>
                    <li>const funA = (name, fnAsCallback) => {</li>
                    <li>console.log(`Welcome ${name}. This is function one. `);</li>
                    <li>fnAsCallback();</li>
                    <li>}</li>
                </ul>
                <ul>
                    <li>const perTwo = () => {</li>
                    <li>console.log(`This is function two.`);</li>
                    <li>}</li>
                </ul>
                <ul>
                    <li>funA("shiv",perTwo);</li>
                </ul>
            </td>
            <td width="50%" valign="top">
                <strong>Result will be</strong>
                <div>Welcome shiv. This is function one. This is function two.</div>
            </td>
        </tr>
    </table>
</code>

<ul>
    <li>Callbacks are just the name of a convention for using JavaScript functions. There isn't a special thing called a 'callback' in the JavaScript language, it's just a convention. Instead of immediately returning some result like most functions, functions that use callbacks take some time to produce a result. The word 'asynchronous', aka 'async' just means 'takes some time' or 'happens in the future, not right now'. Usually callbacks are only used when doing I/O, e.g. downloading things, reading files, talking to databases, etc.</li>
    <li>When you call a normal function you can use its return value:</li>
    <li>
        <code>
            var result = multiplyTwoNumbers(5, 10)
            console.log(result)
            // 50 gets printed out
        </code>
    </li>
    <li>However, functions that are async and use callbacks don't return anything right away.</li>
    <li>
        <code>
            <p>var photo = downloadPhoto('http://coolcats.com/cat.gif');</p>
            <p>In this case the gif might take a very long time to download, and you don't want your program to pause while waiting for the download to finish.</p>
        </code>
    </li>
    <li>
        <code>
            <p>
            Instead, you store the code that should run after the download is complete in a function. This is the callback! You give it to the downloadPhoto function and it will run your callback (e.g. 'call you back later') when the download is complete, and pass in the photo (or an error if something went wrong).</p>
            <p>downloadPhoto('http://coolcats.com/cat.gif', handlePhoto);</p>
            <ul>
                <li>function handlePhoto (error, photo) {</li>
                <li>if (error) console.error('Download error!', error)</li>
                <li>else console.log('Download finished', photo)</li>
                <li>}</li>
            </ul>
            <p>console.log('Download started')</p>
        </code>
    </li>
    <li>The biggest hurdle people have when trying to understand callbacks is understanding the order that things execute as a program runs. In this example three major things happen. First the handlePhoto function is declared, then the downloadPhoto function is invoked and passed the handlePhoto as its callback, and finally 'Download started' is printed out.</li>
    <li>Note that the handlePhoto is not invoked yet, it is just created and passed as a callback into downloadPhoto. But it won't run until downloadPhoto finishes doing its task, which could take a long time depending on how fast the Internet connection is.</li>
    <li>This example is meant to illustrate two important concepts:</li>
    <li>The handlePhoto callback is just a way to store some things to do at a later time The order in which things happen does not read top-to-bottom, it jumps around based on when things complete</li>
</ul>

there may be two situations : 



<?php include('footer.php'); ?>