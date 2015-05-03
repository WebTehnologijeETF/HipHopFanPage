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
	if(txt.id==="pbrojslika"){
		document.getElementById("labPBroj").style.visibility="visible";
	}
}

function sakrijError(txt)
{
	if(txt.id==="imeslika" || txt.id==="prezimeslika" || txt.id==="emailslika" || txt.id==="telslika" || txt.id==="porslika" || txt.id==="pbrojslika"){

		document.getElementById("labIme").style.visibility="hidden";
		document.getElementById("labPrezime").style.visibility="hidden";
		document.getElementById("labEmail").style.visibility="hidden";
		document.getElementById("labEmail2").style.visibility="hidden";
		document.getElementById("labTel").style.visibility="hidden";
		document.getElementById("labPor").style.visibility="hidden";
		document.getElementById("labPBroj").style.visibility="hidden";
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
		
	else{
		document.getElementById("imeslika").style.visibility = "hidden";
		document.getElementById("imeslika2").style.visibility="visible";
	}
}

function valPrezime () 
{
	var prezime=document.getElementById("prezime").value;

	if(prezime == "")
		document.getElementById("prezimeslika").style.visibility="visible";
		
	else{
		document.getElementById("prezimeslika").style.visibility="hidden";
		document.getElementById("prezimeslika2").style.visibility="visible";
	}
}

function valMail() 
{
	var emailReg = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i;

	if (!emailReg.test(forma.email.value))
		document.getElementById("emailslika").style.visibility = "visible";
		
	else{
		document.getElementById("emailslika").style.visibility = "hidden";
		document.getElementById("emailslika2").style.visibility="visible";
	}
}

function valTel () 
{
	var tel=document.getElementById("tel");
	var telReg = /^\+{0,1}[0-9]+[\/-]{0,1}[0-9-]+$/;

	if (!telReg.test(forma.tel.value))
			document.getElementById("telslika").style.visibility = "visible";

	if((telReg.test(forma.tel.value)))
			document.getElementById("telslika2").style.visibility="visible";

	if(tel.value=="")
		document.getElementById("telslika").style.visibility = "hidden";
	
}

function valPor () {
	var por=document.getElementById("por");
	if(por.value=="")
		document.getElementById("porslika").style.visibility="visible";
	
	else{ 
		document.getElementById("porslika").style.visibility="hidden";
		document.getElementById("porslika2").style.visibility="visible";
	}
}

function webServis () {
	alert("pozvan webServis");
	var pbroj=document.getElementById("pbroj");
	var grad=document.getElementById("grad");
    
    var ajax=new XMLHttpRequest();

    ajax.onreadystatechange= function(){
    	alert("onreadystatechange");

         if (ajax.readyState === 4 && ajax.status === 200){

			var pars = JSON.parse(ajax.responseText);
			alert("json");
            
			if(Object.keys(pars)[0]=="greska"){
		       	document.getElementById("pbroj");
		       	alert("greska");
		       	document.getElementById("pbrojslika").style.visibility="visible";
		       	alert("pbrojslika visible");
		       	//document.getElementById("labPBroj").style.visibility="visible";
            }

		   else if(Object.keys(pars)[0]=="ok"){
		    	alert("OK");
		   		document.getElementById("pbroj");
		   		document.getElementById("pbrojslika2").style.visibility="visible";
		    }
		}
        
        if (ajax.readyState === 4 && ajax.status === 404)
        	alert("Greska!");  
 	}
 	ajax.open("GET","http://zamger.etf.unsa.ba/wt/postanskiBroj.php?mjesto="+grad+ "&postanskiBroj=" + pbroj, true);
    alert("alert open");
    ajax.send();
    alert("alert send");
}