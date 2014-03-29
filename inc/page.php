<?php
/*
 * The page generation code.
 * 
 * This is directly called in main.php
 * 
 * @author Noah Harvey <noah.harvey247 @gmail>
 */
/* get login data */
global $editable;
global $login;

$login = checkLogin();

if($login)
	$editable = true;
else
	$editable = false;
?>

<html>
<head>
	<!-- *************HEADER************** -->
	<?php include_once('inc/head.php'); ?>
</head>
<body>

<?php if($login): ?>
<!-- ******************** TOOLBAR ******************** -->
<?php require_once('inc/toolbar.php'); ?>
<!-- /TOOLBAR -->
<?php endif; ?> 
<!-- ******************** NAVBAR ******************** -->
<?php	require_once('inc/navbar.php'); ?>
<!-- /NAVBAR -->

<!-- ******************** CONTENT ******************** -->
<div id="page_content">
	<?php	include($pagepath); ?>
</div><!-- /page_content --!>
<!-- /CONTENT -->

<!-- ******************** FOOTER ******************** -->
<?php include('inc/footer.php'); ?>
<!-- /FOOTER -->

<!-- ******************** SCRIPTS ******************** -->
<?php	include('inc/scripts.php'); ?>
<!-- /SCRIPTS -->

<?php if($DEBUG): ?>
<!-- ******************** DEBUG ******************** -->
<!-- /DEBUG -->
<?php endif; ?>
</body>
</html>
