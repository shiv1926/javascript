<?php include('header.php'); ?>
<ul class="index">
	<li><a href="<?php echo jsbasic('introduction.php'); ?>">Introduction</a></li>
	<li><a href="<?php echo jsbasic('tutorial/how-javascript-works.php'); ?>">How javascript works</a></li>
	<li>
		<h4>Storage</h4>
		<ul>
			<li><a href="<?php echo jsbasic('spread-operator.php'); ?>">Local Storage</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">Session Storage</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">Cookies</a></li>
		</ul>
	</li>
	<li>
		<h4>Storage</h4>
		<ul>
			<li><a href="<?php echo jsbasic('spread-operator.php'); ?>">Local Storage</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">Session Storage</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">Cookies</a></li>
		</ul>
	</li>
	<li>
		<h4>Data Types</h4>
		<ul>
			<li><a href="<?php echo jsbasic('spread-operator.php'); ?>">Primitive Data Types</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">Non-primitive Data Types</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">User defined data types</a></li>
		</ul>
	</li>
	<li>
		<h4>Variables</h4>
		<ul>
			<li><a href="<?php echo jsbasic('spread-operator.php'); ?>">https://www.javascripttutorial.net/javascript-variables/</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">Non-primitive Data Types</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">User defined data types</a></li>
		</ul>
	</li>
	<li>
		<h4>Operators</h4>
		<ul>
			<li><a href="<?php echo jsbasic('spread-operator.php'); ?>">Primitive Data Types</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">Non-primitive Data Types</a></li>
			<li><a href="<?php echo jsbasic('rest-operator.php'); ?>">User defined data types</a></li>
		</ul>
	</li>
	<li>
		<h4>Mislenneous</h4>
		<ul>
			<li><a href="<?php echo jsbasic('dom.php'); ?>">DOM</a></li>
			<li><a href="<?php echo jsbasic('json.php'); ?>">JSON</a></li>
			<li><a href="<?php echo jsbasic('tips.php'); ?>">TIPS</a></li>
			<li><a href="<?php echo jsbasic('script-examples.php'); ?>">Script Examples</a></li>
			<li><a href="<?php echo jsbasic('cheatsheet.php'); ?>">Cheatsheet</a></li>
		</ul>
	</li>
</ul>
<?php 
$links = array();
$links[] = 'http://es6-features.org';
$links[] = 'https://www.javascripttutorial.net/es6';
$links[] = 'https://www.geeksforgeeks.org';
$links[] = 'https://javascript.info : This site has a good index of tutorial';
echo refrences($links);

$links = array();
$links[] = 'Hitesh Chodhary';
$links[] = 'Thapa Technical';
$links[] = 'Yahoo Baba';
$links[] = 'Geekyshows';
$links[] = 'Code with harry';
echo refrences($links, 'Youtube Channel');

$links = array();
$links[] = 'Codewars';
$links[] = 'Scotch.io';
echo refrences($links, 'Code Practice');
include('footer.php'); 
?>