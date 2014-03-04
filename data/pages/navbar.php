
	<div class="jumbotron">
<h1 style="text-align:center">Website Navbar</h1> </div> 
<div class="container">
<div id="editor0" class="editable"><p>Edit the textbox below to change the links in the navbar above.</p>

<p>Links are in the format: <code>link-text(pagename)</code> (e.g: <code>Discipleship(discpipleship)</code>). <em>NOTE:</em> <code>pagename</code> is optional (if you leave it the linke won't go anywhere), however you MUST have the parenthesis for the link to show up.</p>

<p>To create menus use this format:&nbsp;</p>

<p><code>menu-title()</code></p>

<p><code>&nbsp;&nbsp;&nbsp; menu-item(pagename)</code>&nbsp; --&gt; each menu-item is preceded by <strong>4</strong> spaces.</p>

<p><code>&nbsp;&nbsp;&nbsp; menu-item(pagename)</code></p>

<p><code>&nbsp;&nbsp;&nbsp; submenu()</code><code> </code></p>

<p><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; submenu-item(pagename)</code> --&gt; <strong>8</strong> spaces infront of submenu items</p>

<p>&nbsp;</p>

<h1>Navbar Items:</h1>
</div>


<form method="post" class="navbar-form" action="main.php?pageid=navbar" name="navbarform">
	<input value="navbar" name="act" type="hidden">
	<input name="data" type="hidden">
	<textarea cols="50" rows="10" name="text">Home(home)
Discipleship(discipleship)
Worship(worship)
Missions(mission)
Outreach(outreach)
Extras()
    Printing(printing)			</textarea>
		<a href="javascript:sendNavbarData()">
			<span class="label label-primary">Update Navbar</span>
		</a>
</form>
<div class="clearer"></div>
</div>
