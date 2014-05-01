<?php 
/** UI for page templates in the New Page Modal */

function pTemp($name,$active)
{
	echo '<div id="'.$name.'" class="item '.$active.'"><img class="img-responsive" src="data/tpl/'.$name.'.jpg"><br><h3>'.$name.'</h3></div>';
}

function getTpls()
{
	global $conf;

	$dir_hndlr = opendir($conf['DATAPATH'].'/tpl/');
	$active = "active";
	while($file = readdir($dir_hndlr)) 
	{
		//ignore all files that are supposed to be hidden
		if(pathinfo($file)['extension'] === "php")
		{
			pTemp(basename($file,".php"),$active);
			if($active) $active = "";
		}
	}
	closedir($dir_hndlr);
}

?>

<div id="tplSlideshow" class="carousel slide" data-ride="carousel" data-interval="0">
	<div class="carousel-inner">
		<?php getTpls(); ?>
	</div>
	<a class="left carousel-control" data-slide="prev" href="#tplSlideshow"><span class="glyphicon glyphicon-chevron-left"></span></a> 
	<a class="right carousel-control" data-slide="next" href="#tplSlideshow"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

