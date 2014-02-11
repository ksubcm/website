<?php 
/* page config */
$page['TITLE'] = NULL;
$page['CONTENT'] = NULL;

/*load slide show */
require_once('inc/sldbar.php'); 
echo "<!--SLIDE BAR-->";
$show = new Slideshow();
$show->addSlide("canoe.png");
$show->addSlide("hammock.png");
$show->dumpSlideShow();
?>

<div class='hidden-sm hidden-xs'>
	<div class='container'>
		<div class='row'>
			<h1>Mission Statement</h1>
		</div>
		<div class='row'>
			<blockquote>
				<p>Baptist Collegiate Ministries (BCM) is a student led organization on the campuses of Kennesaw State University and Southern Polytechnic State University that is serving local college students and young adults. Our mission is to be dedicated to glorifying God though discipleship. This means through small groups, worship gatherings, and fellowship. </p>
			</blockquote>
		</div>
		<hr>
		<div class='jumbotron'>
			<div class='container'>
				<h2>Got a Question?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<p>
					<a class='btn btn-primary btn-lg'>Contact Us</a>
				</p>
			</div>
		</div>
	</div>
</div>

<!-- MOBILE CONTENT -->
<div class='visible-sm visible-xs'>
	<div class='panel-group' id='accordion'>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>
						News
					</a>
				</h4>
			</div>
			<div id='collapseOne' class='panel-collapse collapse in'>
				<div class='panel-body'>
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'>
						Discipleship
					</a>
				</h4>
			</div>
			<div id='collapseTwo' class='panel-collapse collapse'>
				<div class='panel-body'>
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseThree'>
						Worship
					</a>
				</h4>
			</div>
			<div id='collapseThree' class='panel-collapse collapse'>
				<div class='panel-body'>
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseFour'>
						Outreach
					</a>
				</h4>
			</div>
			<div id='collapseFour' class='panel-collapse collapse'>
				<div class='panel-body'>
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
		<div class='panel panel-default'>
			<div class='panel-heading'>
				<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseFive'>
						Missions
					</a>
				</h4>
			</div>
			<div id='collapseFive' class='panel-collapse collapse'>
				<div class='panel-body'>
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				</div>
			</div>
		</div>
	</div>

<div class='row'>
	<div class='centered'>
		<button type='button' href='../html/contact_us.html' class='btn btn-primary btn-lg'>Contact Us</button>
	</div>
	
</div>

</div>
</div><!--end hidden-xs -->
<!-- END MOBILE CONTENT-->
