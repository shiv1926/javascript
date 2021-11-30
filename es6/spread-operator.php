<?php include('header.php'); ?>
<h4>The rest '...' Opeator</h4>
<ul>
    <li>Spread means to expand something.</li>
</ul>
spread operator has replace the apply method.
spread operator has replace the concat method, because using spread opeator we can concat mulitiple array.
spread operator has replace the copy method. but it creates a shallow copy not the deep copy.

<?php include('footer.php'); ?>


rest and spread works with array and object both.


const myName = "Oluwatobi Sofela";

console.log([...myName]);

// The invocation above will return:
[ "O", "l", "u", "w", "a", "t", "o", "b", "i", " ", "S", "o", "f", "e", "l", "a" ]
