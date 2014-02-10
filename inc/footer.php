<footer id="footer">
	<ul>
		<?php if(!$login): ?>
			<li>
				<a data-toggle="modal" href='#modal-id'>Login</a>
			</li>
		<?php endif; ?>
	</ul>
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
					<p><input type="text" name="uid" id="input" class="form-control" value="" required="required" title="" placeholder="User Name"></p>
					<p><input type="password" name="passwd" id="input" class="form-control" required="required" title="" placeholder="Password"></p>
					<div class="form-actions"><button type="submit" class="btn btn-primary">Sign in</button></div>
				</form>
				
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div> -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal --><!-- /login -->

<!-- INCLUDE JAVASCRIPTS -->
<!-- jQuery -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/holder/2.2.0/holder.js'></script>
<script src='http://code.jquery.com/jquery.js'></script>

<!-- Bootstrap JavaScript -->
<script src='scripts/bootstrap.min.js'></script>
<!-- ckeditor -->
<script src='scripts/ckeditor/ckeditor.js'></script>
<!-- load the texteditor if it's found -->
<script>
<?php	include('inc/scripts.php'); ?>
</script>
