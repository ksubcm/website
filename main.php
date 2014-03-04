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
			if(isset($_POST['data']))
				savePage($conf['CONFPATH']."/navbar.conf",$_POST['data']);
			break;
	}
}

/* get the requested page name */
if(isset($_GET['pageid']))
	$_SESSION['pageid'] = @$_GET['pageid'];
else if(!isset($_POST['act'])) //only set the pagename if an action wasn't called
	$_SESSION['pageid'] = "home";

$pagepath = $conf['PAGESPATH']."/".$_SESSION['pageid'].".php";

/* if file isn't found then redirect */
if(!file_exists($pagepath))
{
	$_SESSION['pageid'] = "pgNotFound"; 
	$pagepath = $conf['PAGESPATH']."/".$_SESSION['pageid'].".php";
}

/* perform caching only if we aren't debugging*/
$cachefile = $conf['CACHEPATH']."/".$_SESSION['pageid'].".cache";

/* call the cache if the requested page has a later modification time than its
matching cachepage*/
if(!$DEBUG && file_exists($cachefile) && filemtime($cachefile) > filemtime($pagepath))
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
echo "<!-- CACHED ON: ".date(DATE_RFC2822)."-->";

$fp = fopen($cachefile, 'w');
if($fp)
{
	fwrite($fp, ob_get_contents());
	fclose($fp);
}

ob_end_flush();

?>
