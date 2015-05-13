function provjeriPodatke() {
	alert("pozvana provjera");
	//napravit provjeru
	return true;

}

function dodajMixtape() {
	alert("dodaj");
	var forma = document.getElementById("forma-unos");
	var mixtape= {
		naziv: document.getElementById("naziv"),
		url: document.getElementById("url"),
		slika: document.getElementById("slika")
	}
	alert(mixtape);

	//if(provjeriPodatke("dodaj", mixtape)===true) {

		var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function(){

	 		if(ajax.status === 200 && ajax.readyState === 4) {
	   			alert("Uspjesno dodano!");
	   			//ucitajProizvode();
	  		}
	 //	}
		
		mypostrequest.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=15928", true);
		mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		mypostrequest.send("akcija=dodavanje" + "&brindexa=15928&proizvod=" + JSON.stringify(mixtape));
	}
}

