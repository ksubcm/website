<?php 
/*
 * This is the main configuration file.
 * all configuration settings will be a part of the conf array. Each key will
 * hod a specific setting and the value held is the ....well the value held for
 * that setting.
 */
global $conf;
$conf = array();

/** path to the slide bar php generation file */
$conf['INCPATH'] = 'inc';

/** config dir path */
$conf['CONFPATH'] = 'conf';

/** path to all the content generation pages */
$conf['PAGESPATH']  = 'data/pages';

/** path to all the images for the website */
$conf['IMGPATH']    = 'data/img';

/** the standard link header. All links should begin with this */
$conf['LINKPATH']   = 'main.php?pageid=';

/** path to cache files */
$conf['CACHEPATH'] = 'data/cache';

/** the ammount of time to hold caches for */
$conf['CACHETIME'] = 86400; //ammount of seconds in 1 day

/** path to scripts */
$conf['SCRIPTPATH'] = 'scripts';

/** location of user data */
$conf['USERDATA'] = 'data/users.ini';

/** turn on debuggin symbols? */
$DEBUG = 1;
?>

