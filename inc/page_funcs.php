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
	global $editable;
	if($title == NULL) return;
	echo "<div class='jumbotron'>
		<div class='container'>
			<h1 class='editable' contenteditable='".$editable."'>$title</h1>
			<p class='editable' contenteditable='".$editable."'>$subtitle</p>
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
	global $editable;
	if($content == NULL) return;
	echo "<div class='editable' contenteditable='".$editable."' id='pagecontent'>"
	.$content."
	</div>";
}
?>
