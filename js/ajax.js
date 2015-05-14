function openUrl(url) {	
    var ajax = new XMLHttpRequest;
     //	 ajax.open("GET", url, true);
    ajax.onreadystatechange = function() {
        if(ajax.readyState === 4 && ajax.status === 200) {
        	document.open();
            document.write(ajax.responseText);
            document.close();
        }
        //if(ajax.readyState==4 && ajax.status==404)
        //	alert("404 error page!");
    }
       ajax.open("GET", url, true);
    ajax.send();
}


function dajDetaljnije(){

    var xmlhttp = new XMLHttpRequest();
 //alert("pozvana");
    xmlhttp.onreadystatechange = function () {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
           
            document.getElementById("homepage").innerHTML = xmlhttp.responseText;
        }
        if(xmlhttp.readyState==4 && xmlhttp.status==404)
        alert("404 error page!");
    }

    xmlhttp.open("GET", "detaljnije.php", true);
    xmlhttp.send();
}