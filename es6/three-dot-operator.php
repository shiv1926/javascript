<?php include('header.php'); ?>
<h4>Three dot opeator</h4>
<ul>
    <li>JavaScript uses three dots (...) for both the rest and spread operators. But these two operators are not the same.</li>
    <li>
        Here are the main differences : 
        <ul>
            <li>The spread operator unpacks elements. The rest parameter packs elements into an array.</li>
            <li>The spread operator unpacks elements while The rest parameter packs elements into a single entity either array or object, by default it creates array.</li>
        </ul>
    </li>
    <li><a href="<?php echo es_url('rest-operator.php'); ?>">Rest Operator</a></li>
    <li><a href="<?php echo es_url('spread-operator.php'); ?>">Spread Operator</a></li>
</ul>
<?php include('footer.php'); ?>