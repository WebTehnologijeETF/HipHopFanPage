function openUrl(url) {	
    var ajax = new XMLHttpRequest;
    ajax.onreadystatechange = function() {
        if(ajax.readyState === 4 && ajax.status === 200) {
        	//document.open();
           // document.write(ajax.responseText);
            //document.close();
              document.getElementById("page").innerHTML=ajax.responseText;
        }  
    
        //if(ajax.readyState==4 && ajax.status==404)
        //	alert("404 error page!");
    }
       ajax.open("GET", url, true);
    ajax.send();
}

function dajDetaljnije(id) {
  // alert("pozvo");
    var xmlhttp=new XMLHttpRequest();
     xmlhttp.onreadystatechange=function(){
        if(xmlhttp.status === 200 & xmlhttp.readyState === 4) {
           
            document.getElementById("homepage").innerHTML = xmlhttp.responseText;   
        }
      else if(xmlhttp.readyState==4 && xmlhttp.status==404) {

            alert("404 error page!");
        }
    }
    xmlhttp.open("GET", "detaljnije.php?id="+id, true);
    xmlhttp.send();
}

function dajKomentar(id) {
   //alert("pozvo");
    var xmlhttp=new XMLHttpRequest();
     xmlhttp.onreadystatechange=function(){
        if(xmlhttp.status === 200 & xmlhttp.readyState === 4) {
           
            document.getElementById("homepage").innerHTML = xmlhttp.responseText;   
        }
      else if(xmlhttp.readyState==4 && xmlhttp.status==404) {

            alert("404 error page!");
        }
    }
    xmlhttp.open("GET", "komentari.php?id="+id, true);
    xmlhttp.send();
}

function povratakNaNovost(id) {
   //alert("pozvo");
    var xmlhttp=new XMLHttpRequest();
     xmlhttp.onreadystatechange=function(){
        if(xmlhttp.status === 200 & xmlhttp.readyState === 4) {
           
            document.getElementById("homepage").innerHTML = xmlhttp.responseText;   
        }
      else if(xmlhttp.readyState==4 && xmlhttp.status==404) {

            alert("404 error page!");
        }
    }
    xmlhttp.open("GET", "detaljnije.php?id="+id, true);
    xmlhttp.send();
}