var val_ime=false;
var val_prez=false;
var val_mail=false;
var val_tel=false;
var val_por=false;
var val_pbr=false;
var val_web=false;
var button=document.getElementById("posalji");
//button.disabled=true;

function provjeri (){
	if(val_ime==true && (val_prez) && (val_mail) && (val_tel) && (val_por) && (val_pbr) && (val_web)){
		button.disabled=false;
	}
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
		var gr=document.getElementById("grad");
		var pb=document.getElementById("pbroj");
		if(gr.value=="" & pb.value!="")
			document.getElementById("labPBroj2").style.visibility="visible";
		else
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
		document.getElementById("labPBroj2").style.visibility="hidden";
	}
}
	
function valIme(){
	var ime=document.getElementById("ime").value;
	var imeReg = /^[a-zšđčćž]+$/i;

	//if(ime == "")
	//document.getElementById("imeslika").style.visibility="visible";

	if (!imeReg.test(forma.ime.value) || ime.length<2 ){
		document.getElementById("imeslika").style.visibility = "visible";
		document.getElementById("imeslika2").style.visibility="hidden";
		val_ime=false;
	}
		
	else{
		document.getElementById("imeslika").style.visibility = "hidden";
		document.getElementById("imeslika2").style.visibility="visible";
		val_ime=true;
	}
	provjeri();
}

function valPrezime (){
	var prezime=document.getElementById("prezime").value;

	if(prezime == ""){
		document.getElementById("prezimeslika").style.visibility="visible";
		document.getElementById("prezimeslika2").style.visibility="hidden";
		val_prez=false;
	}
		
	else{
		document.getElementById("prezimeslika").style.visibility="hidden";
		document.getElementById("prezimeslika2").style.visibility="visible";
		val_prez=true;
	}
	provjeri();
}

function valMail(){
	var emailReg = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i;

	if (!emailReg.test(forma.email.value)){
		document.getElementById("emailslika").style.visibility = "visible";
		document.getElementById("emailslika2").style.visibility="hidden";
		val_mail=false;
	}
		
	else{
		document.getElementById("emailslika").style.visibility = "hidden";
		document.getElementById("emailslika2").style.visibility="visible";
		val_mail=true;
	}
	provjeri();
}

function valTel (){
	var tel=document.getElementById("tel");
	var telReg = /^\+{0,1}[0-9]+[\/-]{0,1}[0-9-]+$/;

	if (!telReg.test(forma.tel.value)){
		document.getElementById("telslika").style.visibility = "visible";
		document.getElementById("telslika2").style.visibility="hidden";
		val_tel=false;
	}

	if((telReg.test(forma.tel.value))){
		document.getElementById("telslika2").style.visibility="visible";
		document.getElementById("telslika").style.visibility="hidden";
		val_tel=true;
	}

	if(tel.value==""){
		document.getElementById("telslika").style.visibility = "hidden";
		document.getElementById("telslika2").style.visibility="hidden";
		val_tel=true;
	}
	provjeri();
}
function valPor () {
	var por=document.getElementById("por");
	if(por.value==""){
		document.getElementById("porslika").style.visibility="visible";
		document.getElementById("porslika2").style.visibility="hidden";
		val_por=false;
	}
	
	else{ 
		document.getElementById("porslika").style.visibility="hidden";
		document.getElementById("porslika2").style.visibility="visible";
		val_por=true;
	}
	provjeri();
}
function valPBroj () {
	var pbroj=document.getElementById("pbroj");
	var grad=document.getElementById("grad").value;
	document.getElementById("pbrojslika").style.visibility="hidden";
	document.getElementById("pbrojslika2").style.visibility="hidden";
		   		
	if(pbroj.value!="" & grad!=""){
		val_pbr=true;
		webServis();
	}
	else if(pbroj.value!="" & grad===""){
		document.getElementById("pbrojslika2").style.visibility="hidden";
       	document.getElementById("pbrojslika").style.visibility="visible";
       	val_pbr=false;
	}
	else{
		val_pbr=true;
		val_web=true;
	}
	provjeri();
}

function webServis() {
	var pbroj=document.getElementById("pbroj").value;
	var grad=document.getElementById("grad").value;
	ajax=new XMLHttpRequest();
	ajax.onreadystatechange=function(){
		if(ajax.readyState === 4 && ajax.status === 200) {

			var pars = JSON.parse(ajax.responseText);
			if(Object.keys(pars)[0]=="greska") {
		      	document.getElementById("pbrojslika2").style.visibility="hidden";
		       	document.getElementById("pbrojslika").style.visibility="visible";
		       	val_web=false;
		    }
			else if(Object.keys(pars)[0]=="ok") {
		   		document.getElementById("pbrojslika").style.visibility="hidden";
		   		document.getElementById("pbrojslika2").style.visibility="visible";
		   		val_web=true;
		   }
		}
		else if (ajax.readyState === 4 && ajax.status === 404)
        alert("Greska!"); 	
	}
	ajax.open("GET", "http://zamger.etf.unsa.ba/wt/postanskiBroj.php?mjesto=" + grad + "&postanskiBroj=" + pbroj, true);
	ajax.send();
}

function validiraj(){
	var forma = document.getElementById("forma");

	if((val_ime) & (val_prez) & (val_mail) & (val_tel) & (val_por) & (val_pbr) & (val_web) ){
		button.disabled=false;
		//forma.submit();
	}
	else{
		button.disabled=true
		alert("Unesite validne vrijednosti!");		
	}
}
