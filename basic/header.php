<?php 
function jsbasic($param='')
{
    return 'http://localhost/javascripts/basic/'.$param;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo jsbasic('css/style.css'); ?>">
</head>
<body>
    <div class="container">
        <div class="home">
            <a href="<?php echo jsbasic(); ?>">Home</a>
            <span style="display: inline-block; width: 50px;"></span>
            <a href="<?php echo jsbasic('examples'); ?>">Example</a>
        </div>