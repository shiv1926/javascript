<?php include('header.php'); ?>
<h4>The spread '...' Opeator</h4>
<ul>
    <li>Spread means to expand something.</li>
    <li>spread operator has replace the apply method.</li>
    <li>spread operator has replace the concat method, because using spread opeator we can concat mulitiple array.</li>
    <li>spread operator has replace the copy method. but it creates a shallow copy not the deep copy.</li>
    <li>rest and spread works with array and object both.</li>
    const myName = "Oluwatobi Sofela";
    console.log([...myName]);
    // The invocation above will return:
    [ "O", "l", "u", "w", "a", "t", "o", "b", "i", " ", "S", "o", "f", "e", "l", "a" ]
</ul>
<?php include('footer.php'); ?>