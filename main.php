<?php 

/* includes */
include_once("conf/config.php");
ini_set('display_errors',$DEBUG);

/* get the requested page name */
$pagename = $_GET['pageid'];
$pagepath = $conf['PAGESPATH']."/".$pagename.".php";

/* if file isn't found then redirect */
if(!file_exists($pagepath))
{
	$pagename = "pgNotFound"; 
	$pagepath = $conf['PAGESPATH']."/".$pagename.".php";
}

/* perform caching */
$cachefile = $conf['CACHEPATH']."/".$pagename.".cache";
/* if the time has yet to expire then call the cache */
if(file_exists($cachefile) && time() - $conf['CACHETIME'] < filemtime($cachefile))
{
	include($cachefile);
	exit;
}
/* otherwise regenerate page */
//stop the output buffer
ob_start();

include_once("inc/page.php");

$fp = fopen($cachefile, 'w');
if($fp)
{
	fwrite($fp, ob_get_contents());
	fclose($fp);
}

ob_end_flush();
?>
