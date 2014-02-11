<?php
/*
 * Slideshow creation funtions
 */
class Slideshow 
{
	private $paths = array();

	public function addSlide($img)
	{
		if($img == NULL || $img == " ")
			return;
		$this->paths[] = $img; //append the image path to the end of the list	
	}

	public function dumpSlideShow()
	{
		global $conf;//grab the global configuration (see conf/config.php)
		echo "<div class='hidden-xs'>
		
		<div id='myCarousel' class='carousel slide' data-ride='carousel'>
		<div class='carousel-inner'>";
		/* print the image containers */
		$active = False;
		foreach($this->paths as $path)
		{
			/** make the first slide the active slide */
			if(! $active)
			{
				echo "<div class='item active'><img src=".$conf['IMGPATH']."/".$path." class='img-responsive'></div>";
				$active = True;
			}
			else
				echo "<div class='item'><img src=".$conf['IMGPATH']."/".$path." class='img-responsive'></div>";
		}
		/* print the next and previous buttons */
		echo "
		</div><!-- /carousel inner -->
				<a class='left carousel-control'  data-slide='prev' href='#myCarousel'><span class='glyphicon glyphicon-chevron-left'></span></a> 
				<a class='right carousel-control' data-slide='next' href='#myCarousel'><span class='glyphicon glyphicon-chevron-right'></span></a>
		</div></div><!-- /myCoursel -->";
	}
}
?>
