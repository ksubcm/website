<?php
/*
 * TOOLBAR FOR USERS HOW ARE LOGGED IN
 *
 * @author Noah Harvey <noah.harvey247@gmail.com>
 */

?>
<div id='toolbar'>
	<div class='navbar navbar-inverse' role='navigation'>
		<form method='post' class='navbar-form' action='<?php echo $conf['LINKPATH'].$_SESSION['pageid']; ?>' name='toolbarform'>
			<input type='hidden' name='act'/>
			<input type='hidden' name='uid'/>
			<input type='hidden' name='save_data'/>
			<ul class='nav navbar-nav navbar-right'>
				<li>
					<a href='javascript:sendLogout()'>
						<span class='glyphicon glyphicon-log-out' style='padding-right: 3px;'></span>Logout
					</a>
				</li>
			</ul>
			<ul class='nav navbar-nav navbar-left'>
				<li>
					<a href='javascript:sendSaveData()'>
						<span class='glyphicon glyphicon-floppy-disk' style='padding-right: 3px;'></span>Save
					</a>
				</li>
			</ul>
		</form>
	</div>
</div><!-- /toolbar -->