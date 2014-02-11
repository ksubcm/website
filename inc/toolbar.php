<?php
/*
 * TOOLBAR FOR USERS HOW ARE LOGGED IN
 *
 * @author Noah Harvey <noah.harvey247@gmail.com>
 */

/*
 * echo " <script language='JavaScript' type='text/javascript'>
 * function sendLogout()
 * {
 *   document.logoutform.uid.value = ' ';
 *   document.logoutform.submit();
 * }</script>
 * <div id='adminbar'>";
 * $adminbar = new Navbar();
 * $adminbar->addFreeItem("<form method='post' class='navbar-right navbar-form' action='main.php' name='logoutform'>
 * <input type='hidden' name='uid'/>
 * <ul class='nav navbar-nav'><li><a href='javascript:sendLogout()'>
 * 	<span class='glyphicon glyphicon-log-out'> Logout</span>
 * </a></li></ul>
 * </form>");
 * $adminbar->dumpNavbar();
 * echo "</div>";
 */
?>
<script language='JavaScript' type='text/javascript'>
function sendLogout()
{
  document.logoutform.uid.value = ' ';
  document.logoutform.submit();
}
</script>

<div id='toolbar'>
	<div class='navbar navbar-inverse' role='navigation'>
		<form method='post' class='navbar-right navbar-form' action='main.php' name='logoutform'>
			<input type='hidden' name='uid'/>
			<ul class='nav navbar-nav'>
				<li>
					<a href='javascript:sendLogout()'>
						<span class='glyphicon glyphicon-log-out'> Logout</span>
					</a>
				</li>
			</ul>
		</form>
	</div>
</div><!-- /toolbar -->
