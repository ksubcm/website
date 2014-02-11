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

require_once('inc/navbar.php');
?>

<html>
<head>
	<!-- *************HEADER************** -->
	<?php require_once('inc/head.php'); ?>
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
<?php
	/* default values for a given page */
	$page = array();
	$page['TITLE'] = NULl;
	$page['SUBTITLE'] = NULL;
	$page['CONTENT'] = NULL;
	
	include($pagepath);

	require_once('inc/page_funcs.php');
	
	if($page['TITLE'])
		dump_title($page['TITLE'], $page['SUBTITLE']);

	if($page['CONTENT'])
		dump_content($page['CONTENT']);
?>
<!-- /CONTENT -->

<!-- ******************** FOOTER ******************** -->
<?php include('inc/footer.php'); ?>
<!-- /FOOTER -->

<!-- ******************** SCRIPTS ******************** -->
<?php	include('inc/scripts.php'); ?>
<!-- /SCRIPTS -->

</body>
</html>
