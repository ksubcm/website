<?php
/*
 * the navbar at the top of the screen
 * 
 * @author Noah Harvey
 */

/* php wrapper code for a dynamic navbar */

/* load the nav bar */
/* * $navbar = new Navbar(); * $navbar->addItem(new NavItem("KSU-SPSU",$conf['LINKPATH']."home"));
 * $navbar->addItem(new NavItem("Home",$conf['LINKPATH']."home"));
 * $navbar->addItem(new NavItem("Discipleship",$conf['LINKPATH']."discp"));
 * $navbar->addItem(new NavItem("Worship",$conf['LINKPATH']."worsh"));
 * $navbar->addItem(new NavItem("Missions",$conf['LINKPATH']."missn"));
 * $navbar->addItem(new NavItem("Outreach",$conf['LINKPATH']."outrch"));
 * $navbar->addItem(new NavItem("Contact Us",$conf['LINKPATH']."cntct"));
 */

/* add extras link to navbar */ 
/*
 * $extras_lnk = new NavItem("Extras","");
 * $extras_lnk->addSubItem(new NavItem("Printing At BCM Building",$conf['LINKPATH']."printing"));
 * $extras_lnk->addSubItem(new NavItem("Editor",$conf['LINKPATH']."editor"));
 * $navbar->addItem($extras_lnk);
 * 
 * $navbar->dumpNavbar();
 */

?>
<div id='bcm_navbar' class='navbar navbar-inverse' role='navigation'>
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
			<li class='activable'>
				<a href='main.php?pageid=home'>KSU-SPSU</a>
			</li>
			<li class='activable'>
				<a href='main.php?pageid=home'>Home</a>
			</li>
			<li class='activable'>
				<a href='main.php?pageid=discp'>Discipleship</a>
			</li>
			<li class='activable'>
				<a href='main.php?pageid=worsh'>Worship</a>
			</li>
			<li class='activable'>
				<a href='main.php?pageid=missn'>Missions</a>
			</li>
			<li class='activable'>
				<a href='main.php?pageid=outrch'>Outreach</a>
			</li>
			<li class='activable'>
				<a href='main.php?pageid=cntct'>Contact Us</a>
			</li>
			<li class='dropdown'>
				<a href='' class='dropdown-toggle' data-toggle='dropdown'>Extras</a>
				<ul class='dropdown-menu'>
					<li class='activable'>
						<a href='main.php?pageid=printing'>Printing At BCM Building</a>
					</li>
					<li class='activable'>
						<a href='main.php?pageid=editor'>Editor</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div><!-- /bcm_navbar -->
