/*
 * Wrapper scripts for integrating ckeditor into website
 */

//auto hide showing the inline editor
CKEDITOR.disableAutoInline = true;

//grab all elements of class 'editable' and enable an editor for them
var elements = document.getElementsByClassName('editable');
for (var i=0; i < elements.length; i++) 
{
	elements[i].contentEditable = "true";
	CKEDITOR.inline(elements[i]);
};
