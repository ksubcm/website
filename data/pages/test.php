<?php 
	include("inc/sldbar.php");
	$slideShow = new Slideshow();
	$slideShow->addImgSlide("logoslide.png");
	$slideShow->addImgSlide("discslide.png");
	$slideShow->addImgSlide("missslide.png");
	$slideShow->addImgSlide("worshslide.png");
	$slideShow->dumpSlideShow();
?>
