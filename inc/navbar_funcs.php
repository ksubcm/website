<?php
/*
 * PHP wrapper code to generate a toolbar
 * * @author Noah Harvey <noah.harvey247@gmail.com> */
function generateNavbar($data)
{
	global $conf;
	$lines = explode("\n",$data);
	$navbar = new Navbar();
	$curr_stack = array();
	
	foreach($lines as $line)
	{
		preg_match_all("#^([\s]{0,})([\w\s]{1,})\(([\w\s]{0,})\).*#",$line,$dels);

		if(count($dels[0]) == 0) continue;

		$item = new NavItem($dels[2][0],$conf['LINKPATH'].$dels[3][0]);
		$item->pageid = $dels[3][0];

		//get sublevel
		preg_replace("/[\s]{4,4}/","a",$dels[1][0],-1,$sublevel);

		//pop the current item stack until the desired sublevel is found
		while(count($curr_stack) > $sublevel)	
			array_pop($curr_stack);
		
		//insert as subitem if it is otherwise add it to the navbar
		if(count($curr_stack) != 0)
		{
			$curr = end($curr_stack);
			$curr->addSubItem($item);
		}
		else
			$navbar->addItem($item);
		
		array_push($curr_stack,$item);
	}
	$navbar->dumpNavbar();
}

/**
 * "struct" like class for holding a link information
 */
class NavItem
{
	public $title = NULL;
	public $link = NULL;
	public $pageid = "";
	public $subitems = array();
	public $text = NULL;
	
	function __construct($title, $link, $text = null)
	{
		$this->title = $title;
		$this->link = $link;
		$this->text = $text;
	}
	
	/** adds a subitem to this item */ 
	public function addSubItem($item)
	{
		if($item == NULL) return;
		$this->subitems[] = $item;
	}

}

/*
 * Navigation bar at the top of the screen
 */
class Navbar 
{
	//container for items in navbar
	private $items = array();
	private $freeitems = array();
	
	/** add a new item to the item list */
	public function addItem($nav_item)
	{
		if($nav_item  == NULL) return;
	
		$this->items[] = $nav_item;
	}

	public function addFreeItem($text)
	{
		if($text == NULL) return;
		$this->freeitems[] = $text;
	}

	/**
	 * helper function for dumpNavbar()
	 *
   * dumps the html for a given navbar item (including any nested items it
   * contains)
   */
	private function dumpItem($item)
	{
		$active = "";
		if($item->pageid == $_SESSION['pageid'])
			$active="active";

		//print any subitems
		if(count($item->subitems) > 0)
		{
			echo "<li class='dropdown'>
			<a href='' class='dropdown-toggle' data-toggle='dropdown'>".$item->title."</a>
				<ul class='dropdown-menu'>";
			foreach($item->subitems as $subitem)
				$this->dumpItem($subitem);
			echo "</ul></li>";
		}
		else if($item->text != null)
			echo "<li class='".$active."'>".$item->text."</li>";
		else
			echo "<li class='".$active."'><a href='".$item->link."'>".$item->title."</a></li>";
	}

	public function dumpNavbar()
	{
		global $conf;
		//print the containers and mobile dependent stuffs
		echo "<!-- NAVBAR -->
			<div class='navbar navbar-inverse' role='navigation'>
				<!-- <div class='container'> -->
					<div class='navbar-header'>
						<!-- MOBILE NAVBAR -->
						<!-- button on the far right -->
						<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
							<span class='sr-only'>Toggle navigation</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
						<!-- END MOBILE NAVBAR -->
					</div>
					<div class='navbar-collapse collapse'>
						<ul class='nav navbar-nav'>
						<li class='activable'><a href='".$conf['LINKPATH']."home'>".$conf['LOGOHTML']."</a></li>";
			foreach($this->items as $item)
			{
				$this->dumpItem($item);
			}	
			echo "
								</ul>
							</div>";
			foreach($this->freeitems as $free)
			{
				echo $free;
			}

			echo "
			</div>
			<!-- END NAVBAR -->";
		}
}

?>
