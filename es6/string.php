<?php include('header.php'); ?>
<ul>
    <li>String is a sequence of charectors..</li>
    <li>There are 2 ways to define an string : </li>
    <li>
        <div>By string literal : the string literal is created using single quotes ('') or double quotes ("").</div>
        <div>const fullname = 'shivkumar yadav';</div>
    </li>
    <li>
        <div>By using new keyword : We can create an string using new keyword as follows : </div>
        <div>const fullname = new String("shivkumar yadav");</div>
    </li>
    <li>string literal should be preffered way.</li>
    <li>
        <h4>List of string function and methods : </h4>
        <div>charAt</div>
        <div>charCodeAt</div>
        <div>concat</div>
    </li>
</ul>
<?php 
$links[] = 'https://www.javascripttutorial.net/javascript-variable-scope/';
echo refrences($links);
include('footer.php'); 
?>