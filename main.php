<?php 
/* start session */
if(!isset($_SESSION['session']))
{
	session_start();
	$_SESSION['session'] = true;
}

/* includes */
include("conf/config.php");
include("inc/toolbar_funcs.php");

ini_set('display_errors',$DEBUG);

/** initially we want to grab the cached file */
$cache = true;


/** process a given action */
if(isset($_POST['act']))
{
	switch($_POST['act'])
	{
		case 'uid': 
			if(isset($_POST['uid']))
				login(@$_POST['uid'],@$_POST['passwd']);
			break;
		case 'save': 
			if(isset($_POST['data']))
				savePage($conf['PAGESPATH']."/".$_SESSION['pageid'].".php",$_POST['data']);
			break;
		case 'navbar': 
			$cache = false;
			if(isset($_POST['data']))
				savePage($conf['CONFPATH']."/navbar.conf",$_POST['data']);
			break;
		case 'newpg':
			$cache = false;
			if(isset($_POST['pgname']) && isset($_POST['pgtpl']))
				newPage($_POST['pgname'],$_POST['pgtpl']);
			break;
		case 'delpg':
			if(isset($_POST['pgname']))
				deletePage($_POST['pgname'],$_POST['pgtpl']);
			break;
	}
}

//TODO: change this so default page is home and simplify logic
/* get the requested page name */
if(isset($_GET['pageid']))
	$_SESSION['pageid'] = @$_GET['pageid'];
else if(!isset($_POST['act'])) //only set the pagename if an action wasn't called
	$_SESSION['pageid'] = "home";

//build the page path
$pagepath = $conf['PAGESPATH']."/".$_SESSION['pageid'].".php";

/* if file isn't found then redirect to page not found page*/
if(!file_exists($pagepath))
{
	$_SESSION['pageid'] = "pgNotFound"; 
	$pagepath = $conf['PAGESPATH']."/".$_SESSION['pageid'].".php";
}

/* perform caching only if we aren't debugging*/
if(isset($_SESSION['login']) && $_SESSION['login'])
	$cachefile = $conf['CACHEPATH']."/".$_SESSION['pageid']."_login.cache";
else
	$cachefile = $conf['CACHEPATH']."/".$_SESSION['pageid'].".cache";

if(!file_exists($cachefile) || filemtime($pagepath) > filemtime($cachefile)
		|| filemtime($conf['CONFPATH']."/navbar.conf") > filemtime($pagepath))
	$cache = false;


/* call the cache if the requested page has a later modification time than its
matching cachepage*/
if(!$DEBUG && $cache)
{
	include($cachefile);
	exit;
}

/* otherwise regenerate page */
//stop the output buffer
ob_start();

//grab the content of the page
include_once("inc/page.php");

date_default_timezone_set('UTC');
echo "<!-- PAGE CREATED ON: ".date(DATE_RFC2822)."-->";

//cache the file
if(!is_dir($conf['CACHEPATH']))
	mkdir($conf['CACHEPATH']);

file_put_contents($cachefile,ob_get_contents());
//touch($pagepath);//update the filemtime

ob_end_flush();

?>
