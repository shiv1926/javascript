<?php include('header.php'); ?>
<ul>
    <li>Too much nesting of callback function produce callback hell.</li>
    <li>Multiple functions can be created independently and used as callback functions. These create multi-level functions. When this function tree created becomes too large, the code becomes incomprehensible sometimes and is not easily refactored. This is known as callback hell. Let’s see an example:</li>
    <li>The cause of callback hell is when people try to write JavaScript in a way where execution happens visually from top to bottom. Lots of people make this mistake! In other languages like C, Ruby or Python there is the expectation that whatever happens on line 1 will finish before the code on line 2 starts running and so on down the file. As you will learn, JavaScript is different.</li>
</ul>
<code>
    <table border="0" cellspacing="0" cellpadding="5" width="100%">
        <tr>
            <td width="50%" valign="top">
              <p>function setInfo(name)</p>
              <ul>
                <li>{</li>
                <li>address(myAddress)</li>
                <li>{</li>
                <li>officeAddress(myOfficeAddress)</li>
                <li>{</li>
                <li>telephoneNumber(myTelephoneNumber)</li>
                <li>{</li>
                <li>nextOfKin(myNextOfKin)</li>
                <li>{</li>
                <li>console.log('done'); //let's begin to close each function! </li>
                <li>};</li>
                <li>};</li>
                <li>};</li>
                <li>};</li>
                <li>}</li>
              </ul>
            </td>
            <td width="50%" valign="top">
              <p>We are assuming these functions have been previously defined elsewhere. You can see how confusing it is to pass each function as callbacks. Callback functions are useful for short asynchronous operations. When working with large sets, this is not considered best practice. Because of this challenge, Promises were introduced to simplify deferred activities.</p>
              <p>&nbsp;</p>
              <p>See the pyramid shape and all the }; at the end. This is affectionately known as callback hell.</p>
            </td>
        </tr>
    </table>
</code>
<?php include('footer.php'); ?>
<div>http://callbackhell.com/</div>
<div>https://scotch.io/courses/10-need-to-know-javascript-concepts/callbacks-promises-and-async#toc-asynchronous-operations</div>
