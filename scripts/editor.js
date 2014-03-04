/*
 * Wrapper scripts for integrating ckeditor into website
 */

//auto hide showing the inline editor
//CKEDITOR.disableAutoInline = true;

//grab all elements of class 'editable' and enable an editor for them
var elements = document.getElementsByClassName('editable');
for (var i=0; i < elements.length; i++) 
{
	elements[i].contentEditable = "true";
	elements[i].id = "editor"+i;

	CKEDITOR.inline(elements[i]);
};

elements = document.getElementsByClassName('editable-noi');
for (var i=0; i < elements.length; i++) 
{
	elements[i].contentEditable = "true";
	elements[i].id = "editor"+(10+i);

	CKEDITOR.replace(elements[i]);
};
