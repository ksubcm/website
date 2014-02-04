<?php 

/* includes */
include_once("conf/config.php");
ini_set('display_errors',$DEBUG);

/* get the requested page name */
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
