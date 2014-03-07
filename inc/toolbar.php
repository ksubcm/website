<?php
/*
 * TOOLBAR FOR USERS HOW ARE LOGGED IN
 * * @author Noah Harvey <noah.harvey247@gmail.com>
 */

?>
<div id='toolbar'>
	<div class='navbar navbar-inverse' role='navigation'>
		<form method='post' class='navbar-form' action='<?php echo $conf['LINKPATH'].$_SESSION['pageid']; ?>' name='toolbarform'>
			<input type='hidden' name='act'/>
			<input type='hidden' name='uid'/>
			<input type='hidden' name='data'/>
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
				<li>
					<a data-toggle="modal" href="#newpg_modal" id="newpg">
						<span class='glyphicon glyphicon-plus' style='padding-right: 3px;'></span>New Page
					</a>
				</li>
				<li>
					<a href="<?php echo $conf['LINKPATH'].'navbar'; ?>">
						<span class='glyphicon glyphicon-wrench' style='padding-right: 3px;'></span>Edit Navbar
					</a>
				</li>
			</ul>
		</form>
	</div>
</div><!-- /toolbar -->

<!-- new page modal -->
<div class="modal fade" id="newpg_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Create a New Page</h4>
			</div>
			<div class="modal-body">

				<form action="javascript:sendNewPageData()" method="POST" role="form" name="newpageform">
					<input type='hidden' name='act' value='newpg'/>
					<p>Please Type in the Page ID below (this is what all the links to new pages will be, e.g: "Events" pageid is "events"</p>
					<p><input type="text" name="pgname" class="form-control" required="required" placeholder="Page ID"></p>
					<p><!--TODO: add templates here --><input type='hidden' name='pgtpl' value=""> </p>
					<div class="form-actions"><button type="submit" class="btn btn-primary">Create New Page</button></div>
				</form>
				
			</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal --><!-- /login -->
