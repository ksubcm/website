var refs = document.getElementsByClassName('fullh-ref');
var elements = document.getElementsByClassName('fullh');
for (var i=0; i < refs.length; i++) 
{
	alert(refs[i].style.height);
	elements[i].style.height = refs[i].style.height;
};

