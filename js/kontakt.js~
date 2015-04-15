function validiraj(arg)
{
	var forma = document.getElementById("forma");
}

function prikaziError(txt)
{
	if(txt.id==="imeslika"){
		document.getElementById("labIme").style.visibility="visible";
	}
	if(txt.id==="prezimeslika"){
		document.getElementById("labPrezime").style.visibility="visible";
	}
	if(txt.id==="emailslika"){
		var em=document.getElementById("email");
		if(em.value=="")
			document.getElementById("labEmail2").style.visibility="visible";
		else	
		document.getElementById("labEmail").style.visibility="visible";
	}
	if(txt.id==="telslika"){
		document.getElementById("labTel").style.visibility="visible";
	}
	if(txt.id==="porslika"){
		document.getElementById("labPor").style.visibility="visible";
	}
}

function sakrijError(txt)
{
	if(txt.id==="imeslika" || txt.id==="prezimeslika" || txt.id==="emailslika" || txt.id==="telslika" || txt.id==="porslika"){

		document.getElementById("labIme").style.visibility="hidden";
		document.getElementById("labPrezime").style.visibility="hidden";
		document.getElementById("labEmail").style.visibility="hidden";
		document.getElementById("labEmail2").style.visibility="hidden";
		document.getElementById("labTel").style.visibility="hidden";
		document.getElementById("labPor").style.visibility="hidden";
		
	}
}
	
function valIme()
{
	var ime=document.getElementById("ime").value;
	var imeReg = /^[a-zšđčćž]+$/i;

	//if(ime == "")
	//document.getElementById("imeslika").style.visibility="visible";

	if (!imeReg.test(forma.ime.value) || ime.length<2 )
		document.getElementById("imeslika").style.visibility = "visible";
		
	else
		document.getElementById("imeslika").style.visibility = "hidden";
}

function valPrezime () 
{
	var prezime=document.getElementById("prezime").value;

	if(prezime == "")
		document.getElementById("prezimeslika").style.visibility="visible";
		
	else
		document.getElementById("prezimeslika").style.visibility="hidden";

}

function valMail() 
{
	var emailReg = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i;

	if (!emailReg.test(forma.email.value))
		document.getElementById("emailslika").style.visibility = "visible";
		
	else
		document.getElementById("emailslika").style.visibility = "hidden";

}

function valTel () 
{
	var tel=document.getElementById("tel");
	var telReg = /^\+{0,1}[0-9]+[\/-]{0,1}[0-9-]+$/;

	
	if (tel.value!="" && !telReg.test(forma.tel.value))
			document.getElementById("telslika").style.visibility = "visible";

	else 	
		document.getElementById("telslika").style.visibility = "hidden";	
}

function valPor () {
	var por=document.getElementById("por");
	if(por.value=="")
		document.getElementById("porslika").style.visibility="visible";
	else document.getElementById("porslika").style.visibility="hidden";
}

/*function reset () 
{
	
		document.getElementById("imeslika").style.visibility="hidden";
		document.getElementById("prezimeslika").style.visibility="hidden";
		document.getElementById("emailslika").style.visibility="hidden";
		document.getElementById("telslika").style.visibility="hidden";
		document.getElementById("porslika").style.visibility="hidden";
	
}*/