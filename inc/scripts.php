<?php
/*
 * Includes the script code into the footer of the generated page. This is to
 * optimize the speed of the website
 */
?>
<!-- INCLUDE JAVASCRIPTS -->
<!-- jQuery -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/holder/2.2.0/holder.js'></script>
<script src='http://code.jquery.com/jquery.js'></script>

<!-- Bootstrap JavaScript -->
<script src='scripts/bootstrap.min.js'></script>

<?php global $editable; if($editable): ?>
<!-- ckeditor -->
<script src='scripts/ckeditor/ckeditor.js'></script>
<?php endif; ?>

<!-- load the texteditor if it's found -->
<script>
<?php 
	if($editable)
		include_once($conf['SCRIPTPATH']."/editor.js"); 
?>
</script>
