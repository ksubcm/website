<footer id="footer">
			<?php if(!$login): ?>
					<a data-toggle="modal" href='#modal-id' id='login' >Login</a>
			<?php endif; ?>
</footer>

<!-- LOGIN MODAL -->
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login to BCM</h4>
			</div>
			<div class="modal-body">

				<form action="" method="POST" role="form" name="login_form">
						<input type='hidden' name='act' value='uid'/>
					<p><input type="text" name="uid" id="input" class="form-control" value="" required="required" title="" placeholder="User Name"></p>
					<p><input type="password" name="passwd" id="input" class="form-control" required="required" title="" placeholder="Password"></p>
					<div class="form-actions"><button type="submit" class="btn btn-primary">Sign in</button></div>
				</form>
				
			</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal --><!-- /login -->
