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
		echo "<div class=' hidden-xs'>
		<div id='myCarousel' class='carousel slide'>
		<ol class='carousel-indicators'>
			<li data-target='myCarousel' data-slide-to='0' class='active'></li>
			<li data-target='myCarousel' data-slide-to='1'></li>
			<li data-target='myCarousel' data-slide-to='2'></li>
		</ol>
		<div class='carousel-inner'>";
		
		$active = False;
		foreach($this->paths as $path)
		{
			if(! $active)
			{
				echo "<div class='item active'><img src=".$conf['IMGPATH']."/".$path." class='img-responsive'></div>";
				$active = True;
			}
			else
				echo "<div class='item'><img src=".$conf['IMGPATH']."/".$path." class='img-responsive'></div>";
		}
		echo "</div>
				<a class='left carousel-control' href='#myCarousel' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
				<a class='right carousel-control' href='#myCarousel' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
			</div>
		</div>";
	}
}
?>
