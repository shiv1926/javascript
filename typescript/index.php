<?php include('header.php'); ?>
<ul class="index">
	<li>
		<h4>Variables</h4>
		<ul>
			<li><a href="<?php echo ts_url('introduction.php'); ?>">Introduction</a></li>
			<li><a href="<?php echo ts_url('what-is-data-type.php'); ?>">What is data type</a></li>
			<li><a href="<?php echo ts_url('enviroment-setup.php'); ?>">Enviroment Setup</a></li>
			<li><a href="<?php echo ts_url('scope-variable.php'); ?>">Scope of Variables</a></li>
		</ul>
	</li>
</ul>
<?php 
$links[] = 'https://www.tutorialspoint.com/typescript/index.htm';
$links[] = 'https://www.typescripttutorial.net';
echo refrences($links);
include('footer.php'); 
?>