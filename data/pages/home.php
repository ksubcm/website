<div class="hidden-xs">
<?php 
	include("inc/sldbar.php");
	$slideShow = new Slideshow();
	$slideShow->addImgSlide("logoslide.png","bg-red");
	$slideShow->addImgSlide("discslide.png","bg-green");
	$slideShow->addImgSlide("missslide.png","bg-yellow");
	$slideShow->addImgSlide("worshslide.png","bg-purple");
	$slideShow->dumpSlideShow();
?>
</div>

<div class="" style=""><div class="container">
<div id="hometbl">
<div><a href="main.php?pageid=discipleship" title="Discipleship"><img alt="Discipleship" src="data/img/bible.jpg"></a></div>

<div><a href="main.php?pageid=events" title="Events"><img alt="Wednesday Lunch" src="data/img/lunch.jpg"></a></div>

<div><a href="main.php?pageid=worship" title="Worship"><img alt="Fusion" src="data/img/fusion-logo.jpg"></a></div>

<div><a href="main.php?pageid=missions" title="Missions"><img alt="Missions" src="data/img/church.jpg"></a></div>
</div>

<div id="cmnts">
<h2>Questions? Comments?</h2>

<h2 style="text-align:center"><a href="main.php?pageid=contacts">&nbsp;Contact Us</a></h2>
</div>

</div>
</div>
