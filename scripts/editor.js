/*
 * Wrapper scripts for integrating ckeditor into website
 */

//auto hide showing the inline editor
CKEDITOR.disableAutoInline = false;

var elements = document.getElementsByClassName('editable');

for (var i=0; i < elements.length; i++) {
	CKEDITOR.inline(elements[i]);
};
