<?php include('header.php'); ?>
<ul class="index">
	<li><a href="tutorial/introduction.php">Introduction</a></li>
	<li><a href="tutorial/how-javascript-works.php">How javascript works</a></li>
	<li>https://www.youtube.com/watch?v=VaBP6_pBOgM&list=PLwGdqUZWnOp0hSGwasCjbrWSPrEKqB_kz, important video from 1 to 10</li>
	<li>
		<h4>Storage</h4>
		<ul>
			<li><a href="<?php echo es_url('spread-operator.php'); ?>">Local Storage</a></li>
			<li><a href="<?php echo es_url('rest-operator.php'); ?>">Session Storage</a></li>
			<li><a href="<?php echo es_url('rest-operator.php'); ?>">Cookies</a></li>
		</ul>
	</li>
</ul>
<?php include('footer.php'); ?>