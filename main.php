<?php 
/* start session */
session_start();

/* includes */
include("conf/config.php");
include("inc/login.php");

ini_set('display_errors',$DEBUG);

/*  login */
if(isset($_POST['uid']))
	login(@$_POST['uid'],@$_POST['passwd']);

/* by default we are not logged in */
if(isset($_SESSION['login']) == false)
	$_SESSION['login'] = false;

/* get the requested page name */
$pageid = "home";
if(isset($_GET['pageid']))
	$pageid = @$_GET['pageid'];

$pagepath = $conf['PAGESPATH']."/".$pageid.".php";

/* if file isn't found then redirect */
if(!file_exists($pagepath))
{
	$pageid = "pgNotFound"; 
	$pagepath = $conf['PAGESPATH']."/".$pageid.".php";
}

/* perform caching only if we aren't debugging*/
$cachefile = $conf['CACHEPATH']."/".$pageid.".cache";

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
