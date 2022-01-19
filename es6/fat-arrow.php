<?php include('header.php'); ?>
<ul>
    <li>Fat arrow is an short form or short syntax of regular function declaration.</li>
    <li>Fat arrow has some limitation : </li>
</ul>

<h4>Fat arrow function vs regular function</h4>
<p>There are some situations where we should not use the fat arrow function : </p>
<ul>
    <li>A fat arrow function does not have its own this value, instead of it uses this value of its enclosing lexical scope.</li>
    <li>Avoid using the arrow function for event handlers, object methods, prototype methods, and functions that use the arguments object.</li>
    <li>
        <strong>Example</strong>
        <code>
            <table border="0" cellspacing="0" cellpadding="5" width="100%">
                <tr>
                    <td width="50%" valign="top">
                        <h6>Fat arrow function</h6>
                        <div><input type="text" name="username" id="username" placeholder="Enter a username"></div>
                        <div>const username = document.querySelector('#username');</div>
                        <div>username.addEventListener('keyup', () => {</div>
                          <div>greeting.textContent = 'Hello ' + this.value;</div>
                        <div>});</div>
                    </td>
                    <td width="50%" valign="top">
                        <h6>Regular function</h6>
                        <div>username.addEventListener('keyup', function () {</div>
                        <div>input.textContent = 'Hello ' + this.value;</div>
                        <div>});</div>
                    </td>
                </tr>
            </table>
        </code>
    </li>
</ul>

<?php 
$links = array();
$links[] = 'https://www.w3schools.com/js/js_arrow_function.asp';
$links[] = 'https://www.javascripttutorial.net/es6/javascript-arrow-function/';
$links[] = 'https://www.javascripttutorial.net/es6/when-you-should-not-use-arrow-functions/';
echo refrences($links);
include('footer.php'); 
?>