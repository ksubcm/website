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
	<link href="css/carousel.css" rel="stylesheet">
</head>
<body>
<?php 
ini_set('display_errors',$DEBUG);
/* load the nav and slideshow bar */
require_once($conf['NAVBARPATH']);
require_once($conf['SLDBARPATH']); 

/*load slide show */
"echo <!--SLIDE BAR-->";
$show = new Slideshow();
$show->addSlide("canoe.jpg");
$show->addSlide("hammock.jpg");
$show->addSlide("marcus.jpg");
$show->dumpSlideShow();

/* load page content */
echo "<!-- CONTENT -->";
include_once $conf['PAGESPATH']."/".$_GET['pageid'].".php";

?>
<!-- INCLUDE JAVASCRIPTS -->
<!-- jQuery -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/holder/2.2.0/holder.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</body>
</html>
