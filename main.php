<?php 
/* initial configuration */
include_once("conf/config.php");
?>
<html>
<head>
	<title>KSU BCM</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/layout.css" rel="stylesheet">
</head>
<body>
<?php 
ini_set('display_errors',$DEBUG);

/* load the nav bar */
require_once($conf['NAVBARPATH']);
$navbar = new Navbar();
$navbar->addItem(new NavItem("Home",$conf['LINKPATH']."home"));
$navbar->addItem(new NavItem("Discipleship",$conf['LINKPATH']."discp"));
$navbar->addItem(new NavItem("Worship",$conf['LINKPATH']."worsh"));
$navbar->addItem(new NavItem("Missions",$conf['LINKPATH']."missn"));
$navbar->addItem(new NavItem("Outreach",$conf['LINKPATH']."outrch"));
$navbar->addItem(new NavItem("Contact Us",$conf['LINKPATH']."cntct"));
$navbar->dumpNavbar();

/*load slide show */
require_once($conf['SLDBARPATH']); 
echo "<!--SLIDE BAR-->";
$show = new Slideshow();
$show->addSlide("canoe.jpg");
$show->addSlide("hammock.jpg");
$show->addSlide("marcus.jpg");
$show->dumpSlideShow();

/* load page content */
echo "<!-- CONTENT -->";
include_once $conf['PAGESPATH']."/".$_GET['pageid'].".php";

?>
</body>

<!-- move to external js source if this works --> 
<script>
//add some magic code to set the active link in the navbar for the current page
</script>

<!-- INCLUDE JAVASCRIPTS -->
<!-- jQuery -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/holder/2.2.0/holder.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</html>
