/*
 * Toolbar js functions */
function sendLogout()
{
	document.toolbarform.act.value = 'uid';
  document.toolbarform.uid.value = ' ';
  document.toolbarform.submit();
}

function hasClass(element, cls) 
{
	return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}

function saveElements(elements)
{
	//...replace their content with the newly added html
	for(var i=0; i < elements.length; i++) 
	{ 
		//create new element with copy of contents
		var newElem = document.createElement("div");
		newElem.innerHTML = CKEDITOR.instances[elements[i].id].getData();
		newElem.style = "";
		if(hasClass(elements[i],"editable-noi"))
			newElem.className = "editable-noi";
		else
			newElem.className = "editable";

		//remove the editor so it's not included in the saved content
		CKEDITOR.instances[elements[i].id].destroy();

		var parent = elements[i].parentNode;
		parent.replaceChild(newElem, elements[i]);
	}
}

//call to save the currently edited page
function sendSaveData()
{ 
	//grab all the elements that have an editor attached...
	var inlines = document.getElementsByClassName('editable'); var noinlines = document.getElementsByClassName('editable-noi'); 
	saveElements(inlines);
	saveElements(noinlines);

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

function sendNewPageData()
{
	//grab the template name
	var temp = document.getElementById("tplSlideshow").getElementsByClassName("active");
	var tplname = temp[0].id;
	
	var pgname = document.newpageform.pgname.value;
	
	//submit the changes
	document.newpageform.act.value = 'newpg';
	document.newpageform.action = "main.php?pageid="+pgname;
	document.newpageform.pgtpl.value = tplname;
	document.newpageform.submit();
}
