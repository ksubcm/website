<?php 
/*
 * This is the main configuration file.
 * all configuration settings will be a part of the conf array. Each key will
 * hod a specific setting and the value held is the ....well the value held for
 * that setting.
 */
global $conf;
$conf = array();

/** path to the navbar php generation file */
$conf['NAVBARPATH'] = 'inc/navbar.php';

/** path to the slide bar php generation file */
$conf['SLDBARPATH'] = 'inc/sldbar.php';

/** path to all the content generation pages */
$conf['PAGESPATH']  = 'data/pages';

/** path to all the images for the website */
$conf['IMGPATH']    = 'data/img';

/** the standard link header. All links should begin with this */
$conf['LINKPATH']   = 'main.php?pageid=';

/** turn on debuggin symbols? */
$DEBUG = 1;
?>

