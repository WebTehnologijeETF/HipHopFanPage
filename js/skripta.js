//function klik(clicked){
	//alert("pozvalose");
//	clicked.childNodes[0].click();
//}

function subKreiraj(idClicked, idMeni){
	var showmenu = document.getElementById(idMeni);
	var clicked = document.getElementById(idClicked);
	var offset = clicked.getBoundingClientRect();
	showmenu.style.left = offset.left + "px";
	showmenu.style.display = "block";
}

function subNestani(idMeni){
	var hidemenu = document.getElementById(idMeni);

	hidemenu.style.left = "0px";
	hidemenu.style.display = "none";
}

