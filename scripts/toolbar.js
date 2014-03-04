/*
 * Toolbar js functions
 */

function sendLogout()
{
	document.toolbarform.act.value = 'uid';
  document.toolbarform.uid.value = ' ';
  document.toolbarform.submit();
}

//call to save the currently edited page
function sendSaveData() { //grab all the elements that have an editor attached...
	var elements = document.getElementsByClassName('cke_editable');

	//...replace their content with the newly added html
	for(var i=0; i < elements.length; i++) { //create new element with copy of contents
		var newElem = document.createElement("div");
		newElem.innerHTML = CKEDITOR.instances[elements[i].id].getData();
		newElem.className = "editable";
		newElem.id = "editor"+i;

		var parent = elements[i].parentNode;
		parent.replaceChild(newElem, elements[i]);
	}

	//grab the new page content in  text form
	var data = document.getElementById("page_content").innerHTML;

	//submit the changes to be saved
	document.toolbarform.act.value = 'save';
	document.toolbarform.data.value = data;
	document.toolbarform.submit();
}

function sendNavbarData()
{
	//grab the raw text inside the pre tag
	var data = document.navbarform.text.value;
	
	//submit the changes
	document.navbarform.act.value = 'navbar';
	document.navbarform.data.value = data;
	document.navbarform.submit();
}
