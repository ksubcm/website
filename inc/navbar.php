<?php
/*
 * the navbar at the top of the screen
 * 
 * @author Noah Harvey
 */
global $conf;
include_once("navbar_funcs.php");
?>

<?php
/* php wrapper code for a dynamic navbar */
$contents = file_get_contents($conf['CONFPATH']."/navbar.conf");
generateNavbar($contents);
?>
