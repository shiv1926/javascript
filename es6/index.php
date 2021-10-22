<?php include('header.php'); ?>
<ul class="index">
	<li>
		<h4>Javascript at runtime</h4>
		<ul>
			<li><a href="<?php echo es_url('hoisting.php'); ?>">Hoisting</a></li>
			<li><a href="<?php echo es_url('promises.php'); ?>">Execution Stack and Call Stack</a></li>
		</ul>
	</li>
	<li>
		<h4>Variables</h4>
		<ul>
			<li><a href="<?php echo es_url('variable-introduction.php'); ?>">Introduction</a></li>
			<li><a href="<?php echo es_url('variable-declaration.php'); ?>">Variables and their types</a></li>
			<li><a href="<?php echo es_url('variable-comparison.php'); ?>">Variables types comparison</a></li>
			<li><a href="<?php echo es_url('scope-variable.php'); ?>">Scope of Variables</a></li>
		</ul>
	</li>
	<li>
		<h4>Template</h4>
		<ul>
			<li><a href="<?php echo es_url('template-literals.php'); ?>">Template Literals ( Template String )</a></li>
		</ul>
	</li>
	<li>
		<h4>Strict Mode</h4>
		<ul>
			<li><a href="<?php echo es_url('strict-mode.php'); ?>">Strict Mode</a></li>
		</ul>
	</li>
	<li>
		<h4>Functions</h4>
		<ul>
			<li><a href="<?php echo es_url('what-is-functional-programming.php'); ?>">What is function programming</a></li>
			<li><a href="<?php echo es_url('what-is-function.php'); ?>">What is functions</a></li>
			<li><a href="<?php echo es_url('functions-and-types.php'); ?>">Functions and their types</a></li>
			<li><a href="<?php echo es_url('default-parameters.php'); ?>">Default Parameters</a></li>
			<li><a href="<?php echo es_url('higher-order-functions.php'); ?>">Higher Order Functions</a></li>
			<li><a href="<?php echo es_url('pure-functions.php'); ?>">Pure Functions</a></li>
			<li><a href="<?php echo es_url('fat-arrow.php'); ?>">Arrow Functions</a></li>
			<li><a href="<?php echo es_url('fat-arrow.php'); ?>">Fat Arrow Functions and their benefits</a></li>
			<li><a href="<?php echo es_url('promises.php'); ?>">Map function</a></li>
			<li><a href="<?php echo es_url('promises.php'); ?>">Closure Functions</a></li>
		</ul>
	<li>
		<h4>Synchronous and Asynchronous programming</h4>
		<ul>
			<li><a href="<?php echo es_url('synchronous-and-asynchronous-programming.php'); ?>">Introduction</a></li>
			<li><a href="<?php echo es_url('callback.php'); ?>">Callback</a></li>
			<li><a href="<?php echo es_url('callback-hell.php'); ?>">Callback Hell</a></li>
			<li><a href="<?php echo es_url('promise.php'); ?>">Promise</a></li>
			<li><a href="<?php echo es_url('async-await.php'); ?>">Asyc / Await</a></li>
			<li><a href="<?php echo es_url('fetch.php'); ?>">Fetch API</a></li>
			<li><a href="<?php echo es_url('event-loop.php'); ?>">Event Loop</a></li>
			<li><a href="<?php echo es_url('aysnc-defer.php'); ?>">Async Defer</a></li>
		</ul>
	</li>
	<li>
		<h4>Destructuring</h4>
		<ul>
			<li><a href="<?php echo es_url('destruturing.php'); ?>">Introduction</a></li>
			<li><a href="<?php echo es_url('array-destruturing.php'); ?>">Array Destructuring</a></li>
			<li><a href="<?php echo es_url('object-destruturing.php'); ?>">Object Destructuring</a></li>
		</ul>
	</li>
	<li>
		<h4>Modules</h4>
		<ul>
			<li><a href="<?php echo es_url('modules.php'); ?>">Introduction</a></li>
			<li><a href="<?php echo es_url('export-modules.php'); ?>">Export Modules</a></li>
			<li><a href="<?php echo es_url('import-modules.php'); ?>">Import Modules</a></li>
		</ul>
	</li>
	<li>
		<h4>Operators</h4>
		<ul>
			<li><a href="<?php echo es_url('spread-operator.php'); ?>">Spread Operator</a></li>
			<li><a href="<?php echo es_url('rest-operator.php'); ?>">Rest Operator</a></li>
		</ul>
	</li>
	<li>
		<h4>Iterators and loops</h4>
		<ul>
			<li>for..of</li>
		</ul>
	</li>
	<li>
		<h4>HTML DOM Events</h4>
		<ul>
			<li>addEventListener()</li>
		</ul>
	</li>
	<li><a href="<?php echo es_url('object-iteration.php'); ?>">Object Iterators</a></li>
	<li>
		<h4>In-built Functions</h4>
		<ul>
			<li><a href="<?php echo es_url('in-built-functions.php'); ?>">Introduction</a></li>
			<li><a href="<?php echo es_url('functions-and-types.php'); ?>">String Methods / String Functions</a></li>
			<li><a href="<?php echo es_url('arrsy-methods.php'); ?>">Array / Object Methods</a></li>
			<li><a href="<?php echo es_url('functions-and-types.php'); ?>">Number Methods</a></li>
			<li><a href="<?php echo es_url('functions-and-types.php'); ?>">Global Methods</a></li>
		</ul>
	</li>
	<li>
		<h4>Meta-Programming</h4>
		<ul>
			<li><a href="<?php echo es_url('proxying.php'); ?>">Proxying</a></li>
			<li><a href="<?php echo es_url('reflection.php'); ?>">Reflection</a></li>
		</ul>
	</li>
	<li>
		<h4>Map/Set & WeakMap/WeakSet</h4>
		<ul>
			<li><a href="<?php echo es_url('set-data-structure.php'); ?>">Set Data-Structure</a></li>
			<li><a href="<?php echo es_url('map-data-structure.php'); ?>">Map Data-Structure</a></li>
			<li><a href="<?php echo es_url('weak-link-data-structures.php'); ?>">Weak-Link Data-Structures</a></li>
		</ul>
	</li>
	<li>
		<h4>Best Practice</h4>
		<ul>
			<li><a href="<?php echo es_url('best-practice.php'); ?>">Introduction</a></li>
		</ul>
	</li>
</ul>
<?php 
$links[] = 'http://es6-features.org';
$links[] = 'https://www.javascripttutorial.net/es6';
$links[] = 'https://www.geeksforgeeks.org';
$links[] = 'https://devhints.io/es6 : Cheatsheet';
echo refrences($links);
include('footer.php'); 
?>