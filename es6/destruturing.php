<?php include('header.php'); ?>
<ul>
    <li>
        Destructuring Assignment operator is used to unpack (extract)
        <ol>
            <li>values from array</li>
            <li>properties from object</li>
        </ol>
        into individual variables. It does not affect the original array or object.
    </li>
    <li>
        <p><strong>Destructuring Assignment Syntax</strong></p>
        <div class="example_block">
            Destructuring target = Destructuring source;
        </div>
        <div><strong>Destructuring target:</strong> the left-hand side of a destructuring assignment, either array [var1, var2, var3] or object {var1, var2, var3}.</div>
        <div><strong>Destructuring source:</strong> the right-hand side of a destructuring assignment, the data to be destructured.</div>
    </li>
    <li>
        Destructuring Assignment Works with any iterable items on the right-side, not only array or object.
        <div class="example_block">
            <div>let [x,y,z] = "abc"; // ["a", "b", "c"]</div>
            <div>let [one, two, three] = new Set([1, 2, 3]);</div>
        </div>
        <p>That works, because internally a destructuring assignment works by iterating over the right value. it is like a syntax sugar for calling for..of over the value to the right of = and assigning the values.</p>
    </li>
    <h4>Use Cases</h4>
    <li>Whenever a function or an API return a list of array or json data, and we are interested in only some data we should use destructuing.</li>
    <li>There are several situations where a function can require multiple parameters, so its look ugly to pass multiple parameter, so here we should use destructuring.</li>

</ul>
<?php 
$links[] = 'https://www.javascripttutorial.net/es6/destructuring/';
$links[] = 'https://javascript.info/destructuring-assignment';
echo refrences($links);
include('footer.php'); 
?>