<?php 
	include("inc/sldbar.php");
	$slideShow = new Slideshow();
	$slideShow->addImgSlide("logoslide.png","bg-red");
	$slideShow->addImgSlide("discslide.png","bg-green");
	$slideShow->addImgSlide("missslide.png","bg-yellow");
	$slideShow->addImgSlide("worshslide.png","bg-purple");
	$slideShow->dumpSlideShow();
?>
