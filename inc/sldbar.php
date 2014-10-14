<?php
/*
 * Slideshow creation funtions
 */
class Slideshow 
{
	private $slides = array();

	public function addImgSlide($img,$bgcolor="")
	{
		global $conf;
		$arr = array();

		if($img == NULL || $img == " ")
			return;
		$arr['html'] = "<img src=".$conf['SLIDEPATH']."/".$img." class='img-responsive'>";
		$arr['bg'] = $bgcolor;

		$this->slides[] = $arr;
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
			echo "<div class='item ".$slide["bg"];
			if(! $active)
			{
				echo " active'>".$slide["html"];
				$active = True;
			}
			else
				echo "'>".$slide["html"];
			echo "</div>";
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
