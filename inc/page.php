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

require_once('inc/navbar.php');
?>

<html>
<head>
	<!-- *************HEADER************** -->
	<?php include('inc/head.php'); ?>
</head>
<body>

<?php 
	/* load the admin bar if we're logged in */
	if($login)
	{
		echo " <script language='JavaScript' type='text/javascript'>
		function sendLogout()
		{
		  document.logoutform.uid.value = ' ';
		  document.logoutform.submit();
		}</script>
		<div id='adminbar'>";
		$adminbar = new Navbar();
		$adminbar->addItem(new NavItem("Logout"," ","<form method='post' action='main.php' name='logoutform'><input type='hidden' name='uid'/><a href='javascript:sendLogout()'>Logout</a></form>"));
		$adminbar->dumpNavbar();
		echo "</div>";
	}

 /* load the nav bar */
	$navbar = new Navbar();
	$navbar->addItem(new NavItem("KSU-SPSU",$conf['LINKPATH']."home"));
	$navbar->addItem(new NavItem("Home",$conf['LINKPATH']."home"));
	$navbar->addItem(new NavItem("Discipleship",$conf['LINKPATH']."discp"));
	$navbar->addItem(new NavItem("Worship",$conf['LINKPATH']."worsh"));
	$navbar->addItem(new NavItem("Missions",$conf['LINKPATH']."missn"));
	$navbar->addItem(new NavItem("Outreach",$conf['LINKPATH']."outrch"));
	$navbar->addItem(new NavItem("Contact Us",$conf['LINKPATH']."cntct"));

	/* add extras link to navbar */ $extras_lnk = new NavItem("Extras","");
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

<!-- *************FOOTER************** -->
<?php include('inc/footer.php'); ?>

<?php if($login): ?>
	<!-- *************TOOLBAR************** -->
	<div id='toolbar'></div>
<?php endif ?>

</body>
</html>
