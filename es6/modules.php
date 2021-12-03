<?php include('header.php'); ?>
<ul>
    <li>Modules are basically the libraries, which we includes in our program.</li>
    <li>ES6 modules are the greatest things to keep your code clean, reusable and maintainble.</li>
    <li>ES6 modules allows us to export variables, functions, classes from a module and reuse them.</li>
    <li>An ES6 module is a JavaScript file that executes in strict mode only. It means that any variables or functions declared in the module won’t be added automatically to the global scope.</li>
    <li><a href="<?php echo es_url('export-modules.php'); ?>">Export Modules</a></li>
    <li><a href="<?php echo es_url('import-modules.php'); ?>">Import Modules</a></li>
relative path vs absolute path
<script type="module" src="example.js"></script>
</ul>
<?php include('footer.php'); ?>