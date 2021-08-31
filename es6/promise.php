<?php include('header.php'); ?>
<ul>
    <li>Promises are used to avoid callback hell.</li>
    <li>Promises are asychronous.</li>
    <li>A promise is an object that track wheather certain task is get completed or not.</li>
    <li>A promise is a returned object to which we attach our callbacks, instead of passing callback into a function.</li>
    <li>A promise is an object that represent the completion or failure of an asynchronous operation.</li>
    <li>A promise is used to handle the result of an asynchronous operation. JavaScript is designed to not wait for an asynchrnous block of code to completely execute before other synchronous parts of the code can run. For instance, when making API requests to servers, we have no idea if these servers are offline or online, or how long it takes to process the server request. With Promises, we can defer execution of a code block until an async request is completed. This way, other operations can keep running without interruption.</li>
    <li>
        <p>Promises have three states:</p>
        <ul>
            <li>Pending: This is the initial state of the Promise before an operation begins</li>
            <li>Fulfilled: This means the specified operation was completed</li>
            <li>Rejected: The operation did not complete; an error value is usually thrown</li>
        </ul>
    </li>
    <li>
        There are two ways to use promises
        <ul>
            <li>Using Promise Constructor</li>
            <li>Using Promise Object</li>
        </ul>
    </li>
    <li>
        <strong>As Promise Constructor</strong>
        <code>
            <table cellpadding="5" cellspacing="0" class="code_table">
                <tr>
                    <td width="50%" valign="top" class="right_border">
                        <ul>
                            <li>const promise1 = new Promise( (resolve, reject) => {</li>
                            <li>let roll_no = [1,2,3,4,5];</li>
                            <li>resolve(roll_no);</li>
                            <li>reject('Error in roll numbers.');</li>
                            <li>});</li>
                            <li>&nbsp;</li>
                            <li>promise1.then( (all_roll_no) => {</li>
                            <li>console.log(all_roll_no);</li>
                            <li>}).catch( (error_messaage) => {</li>
                            <li>console.log(error_messaage);</li>
                            <li>})</li>
                        </ul>
                    </td>
                    <td width="50%" valign="top">
                        <p>The Promise object is created using the new keyword and contains the promise; this is an executor function which has a resolve and a reject callback.</p>
                        <p>promise produce</p>
                        <p>promise consume</p>
                        <ul>
                            <li>
                                Every promise object has two methods
                                <ul>
                                    <li>.then</li>
                                    <li>.catch</li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </code>
    </li>
    <li>
        <strong>Chaining Promises:</strong>
        <p>Sometimes we may need to execute two or more asynchronous operations based on the result of preceding promises. In this case, promises are chained.</p>
    </li>
</ul>
<?php include('footer.php'); ?>