<?php
/*
 * The page generation code.
 * 
 * This is directly called in main.php
 * 
 * @author Noah Harvey <noah.harvey247 @gmail>
 */
/* get login data */
//$include('inc/login.php');

//$login = checkLogin();

global $editable;
global $login;


	$editable = 'true';

?>

<html>
<head>
	<!-- *************HEADER************** -->
	<?php include('inc/head.php'); ?>
</head>
<body>

<?php /* load the nav bar */
	require_once($conf['NAVBARPATH']);
	$navbar = new Navbar();
	$navbar->addItem(new NavItem("Home",$conf['LINKPATH']."home"));
	$navbar->addItem(new NavItem("Discipleship",$conf['LINKPATH']."discp"));
	$navbar->addItem(new NavItem("Worship",$conf['LINKPATH']."worsh"));
	$navbar->addItem(new NavItem("Missions",$conf['LINKPATH']."missn"));
	$navbar->addItem(new NavItem("Outreach",$conf['LINKPATH']."outrch"));
	$navbar->addItem(new NavItem("Contact Us",$conf['LINKPATH']."cntct"));
	
	/* add extras link to navbar */
	$extras_lnk = new NavItem("Extras","");
	$extras_lnk->addSubItem(new NavItem("Printing At BCM Building",$conf['LINKPATH']."printing"));
	$extras_lnk->addSubItem(new NavItem("Editor",$conf['LINKPATH']."editor"));
	$navbar->addItem($extras_lnk);
	
	$navbar->dumpNavbar();

	/* load page content. If the page isn't found then redirect us to the page not
	found error page
	*/
	echo "<!-- *************CONTENT************** -->";
	/* default values for a given page */
	$page = array();
	$page['TITLE'] = NULl;
	$page['SUBTITLE'] = NULL;
	$page['CONTENT'] = NULL;
	
	include($pagepath);

	require('inc/page_funcs.php');
	
	if($page['TITLE'])
		dump_title($page['TITLE'], $page['SUBTITLE']);

	if($page['CONTENT'])
		dump_content($page['CONTENT']);
?>
<?php if($login): ?>
	<!-- *************TOOLBAR************** -->
	<div id="toolbar"></div>
<?php endif; ?>

</body>
	<!-- *************FOOTER************** -->
	<?php include('inc/footer.php');?>
</html>
