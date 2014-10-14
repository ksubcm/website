<?php
/*
 * Slideshow creation funtions
 */
class Slideshow 
{
	private $slides = array();

	public function addImgSlide($img)
	{
		global $conf;
		if($img == NULL || $img == " ")
			return;
		$this->slides[] = "<img src=".$conf['SLIDEPATH']."/".$img." class='img-responsive'>";
	}
	
	public function addHTMLSlide($html)
	{
		if($html === NULL || $html === " " || $html === FALSE)
			return;
		$this->slides[] = $html;
	}

	public function dumpSlideShow()
	{
		global $login;
		if($login)
			$interval = 0;
		else
			$interval = 5000;

		echo "<div class='hidden-xs'>
		
		<div id='homeSlideshow' class='carousel slide' data-ride='carousel' data-interval='5000'>
		<div class='carousel-inner'>";
		/* print the image containers */
		$active = False;
		foreach($this->slides as $slide)
		{
			/** make the first slide the active slide */
			if(! $active)
			{
				echo "<div class='item active'>".$slide."</div>";
				$active = True;
			}
			else
				echo "<div class='item'>".$slide."</div>";
		}
		/* print the next and previous buttons */
		echo "
		</div>
		<!-- /carousel inner -->

		<a class='left carousel-control' data-slide='prev' href='#homeSlideshow'><span class='glyphicon glyphicon-chevron-left'></span></a> 
		<a class='right carousel-control' data-slide='next' href='#homeSlideshow'><span class='glyphicon glyphicon-chevron-right'></span></a>

		</div></div>
		<!-- /myCoursel -->";
	}
}
?>
