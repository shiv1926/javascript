<?php include('header.php'); ?>
<ul class="index">
	<li>
		<h4>Variables</h4>
		<ul>
			<li><a href="<?php echo es_url('variable-introduction.php'); ?>">Introduction</a></li>
			<li><a href="<?php echo es_url('variable-declaration.php'); ?>">Variables and their types</a></li>
			<li><a href="<?php echo es_url('variable-comparison.php'); ?>">Variables types comparison</a></li>
			<li><a href="<?php echo es_url('scope-variable.php'); ?>">Scope of Variables</a></li>
		</ul>
	</li>
</ul>
<?php 
$links[] = 'https://www.tutorialspoint.com/typescript/index.htm';
echo refrences($links);
include('footer.php'); 
?>