<?php
/*
 * The page generation code.
 * 
 * This is directly called in main.php
 * 
 * @author Noah Harvey <noah.harvey247 @gmail>
 */

/**
 * @brief prints the title of a page with html wrapping
 * 
 *
 * @param $title (string) - the title of the page
 * @param $subtitle (string) - optional subtitle for page
 * @return function - the html for a title
 * 
 */
function dump_title($title, $subtitle) 
{
	echo "<div class='jumbotron'>
		<div class='container'>
			<h1 contenteditable='true'>$title</h1>
			<p contenteditable='true'>$subtitle</p>
		</div>
	</div>";
}

/**
 * @brief prints the content for a page wrapped in html
 * 
 *
 * $content
 * @return function - html wrapped content
 * 
 */
function dump_content($content)
{
	echo "<div contenteditable='true' id='pagecontent'>"
	.$content."
	</div>";
}

/* print out the standard page HTML header */
echo"<html>
	<head>
		<title>KSU BCM</title>
		<meta charset=utf-8>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<!-- Bootstrap CSS -->
		<link href='http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/layout.css' rel='stylesheet'>
		<link href='css/misc.css' rel='stylesheet'>
	</head>
<body>";

/* load the nav bar */
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
echo "<!-- CONTENT -->";
/* default values for a given page */
$page = array();
$page['TITLE'] = NULl;
$page['SUBTITLE'] = NULL;
$page['CONTENT'] = NULL;

include $pagepath;

if($page['TITLE'])
	dump_title($page['TITLE'], $page['SUBTITLE']);
else
	dump_title("New Page","subtitle");

if($page['CONTENT'])
	dump_content($page['CONTENT']);
else
	dump_content("insert page content here");

/* print out the footer */
echo "</body>

<!-- move to external js source if this works --> 
<script>
//add some magic code to set the active link in the navbar for the current page
</script>

<!-- INCLUDE JAVASCRIPTS -->
<!-- jQuery -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/holder/2.2.0/holder.js'></script>
<script src='http://code.jquery.com/jquery.js'></script>
<!-- Bootstrap JavaScript -->
<script src='http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js'></script>
<!-- ckeditor -->
<script src='".$conf['EDITORPATH']."/ckeditor.js'></script>
<!-- load the texteditor if it's found -->
<script>
	var editor = document.getElementById('__ckeditor__');
	if(editor != null)
	{
		//auto hide showing the inline editor
		CKEDITOR.disableAutoInline = true;
	}
</script>

</html>";
?>
