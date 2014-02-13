<?php
/*
 * TOOLBAR FOR USERS HOW ARE LOGGED IN
 *
 * @author Noah Harvey <noah.harvey247@gmail.com>
 */

?>
<script language='JavaScript' type='text/javascript'>
function sendLogout()
{
	document.toolbarform.act.value = 'uid';
  document.toolbarform.uid.value = ' ';
  document.toolbarform.submit();
}
function sendSaveData()
{
	var data = "";
	var elements = document.getElementsByClassName('cke_editable');

	for(var i=0; i < elements.length; i++)
	{
			data += "<div id='editor"+i+1+"' class='editable'>"+CKEDITOR.instances[elements[i].id].getData()+"</div>";
	}

	document.toolbarform.act.value = 'save';
	document.toolbarform.save_page.value = data;
	document.toolbarform.submit();
}
</script>

<div id='toolbar'>
	<div class='navbar navbar-inverse' role='navigation'>
		<form method='post' class='navbar-form' action='<?php echo $conf['LINKPATH'].$_SESSION['pageid']; ?>' name='toolbarform'>
			<input type='hidden' name='act'/>
			<input type='hidden' name='uid'/>
			<ul class='nav navbar-nav navbar-right'>
				<li>
					<a href='javascript:sendLogout()'>
						<span class='glyphicon glyphicon-log-out' style='padding-right: 3px;'></span>Logout
					</a>
				</li>
			</ul>
			<input type='hidden' name='save_page'/>
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
