<?php
/*
 * "struct" like class for holding a link information
 */
class NavItem
{
	public $title = NULL;
	public $link = NULL;
	public $subitems = array();
	
	function __construct($title, $link)
	{
		$this->title = $title;
		$this->link = $link;
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
	
	/** add a new item to the item list */
	public function addItem($nav_item)
	{
		if($nav_item  == NULL) return;
	
		$this->items[] = $nav_item;
	}
	
	/**
	 * helper function for dumpNavbar()
	 *
   * dumps the html for a given navbar item (including any nested items it
   * contains)
   */
	private function dumpItem($item)
	{
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
		else
			echo "<li class='activable'><a href='".$item->link."'>".$item->title."</a></li>";
	}

	public function dumpNavbar()
	{
		//print the containers and mobile dependent stuffs
		echo "<!-- NAVBAR -->
		<div class='navbar-wrapper'>
			<div class='navbar navbar-inverse navbar-static-top' role='navigation'>
				<div class='container'>
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
					<a class='navbar-brand' href='index.php?pageid=home'>KSU-SPSU BCM</a>
					</div>
					<div class='navbar-collapse collapse'>
						<ul class='nav navbar-nav'>";
			foreach($this->items as $item)
			{
				$this->dumpItem($item);
			}	
			echo "</ul>
							</div>
						</div>
					</div>
			</div>
			<!-- END NAVBAR -->";
		}
}

?>
