<?php
/**
 * @brief prints the title of a page with html wrapping
 * 
 *
 * @param $title (string) - the title of the page
 * @param $subtitle (string) - optional subtitle for page
 * @return function - the html for a title
 * 
 */
function dump_title($title, $subtitle) 
{
	if($title == NULL) return;
	global $editable;
	
	if($editable)
		$edit = "true";
	else
		$edit = "false";
	
	echo "<div class='jumbotron'>
		<div class='container'>
			<h1 class='editable' contenteditable='".$edit."'>$title</h1>
			<p class='editable' contenteditable='".$edit."'>$subtitle</p>
		</div>
	</div>";
}

/**
 * @brief prints the content for a page wrapped in html
 * 
 *
 * $content
 * @return function - html wrapped content
 * 
 */
function dump_content($content)
{
	if($content == NULL) return;
	global $editable;
	
	if($editable)
		$edit = "true";
	else
		$edit = "false";
	
	echo "<div class='editable' contenteditable='".$edit."' id='pagecontent'>"
	.$content."
	</div>";
}
?>
