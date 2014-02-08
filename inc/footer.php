<div id="footer">
	<ul>
		<li><a href='' data-target='#login' data-toggle='modal'>Login</a></li>
	</ul>
</div>

<!-- LOGIN MODAL -->
<div class='container'>
	<div class='row'>
		<div class='modal in' id='login'> 
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal'>x</button>
				<h3>Login</h3>	
			</div>
			<div class='modal-body'>
				<form action='main.php' method='post' accept-charset='utf-8'>
					<p><input type='text' class='span3' name='uid' id='userid' placeholder='userid'/></p>
					<p><input type='text' class='span3' name='passwd' id='password' placeholder='password'/></p>
					<p><button type='submit' class='btn btn-primary'>Sign in</button></p>
				</form>
			</div>
		</div>
	</div>
</div><!-- /login -->
<!-- INCLUDE JAVASCRIPTS -->
<!-- jQuery -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/holder/2.2.0/holder.js'></script>
<script src='http://code.jquery.com/jquery.js'></script>

<!-- Bootstrap JavaScript -->
<script src='scripts/bootstrap.min.js'></script>

<!-- ckeditor -->
<script src='<?php $conf['EDITORPATH']?>/ckeditor.js'></script>

<!-- load the texteditor if it's found -->
<script>
	include('inc/scripts.php');
</script>
