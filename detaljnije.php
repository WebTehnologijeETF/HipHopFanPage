<link rel="stylesheet" type="text/css" href="css1.css">

<div = class="post1">
<?php

$id= $_REQUEST['id'];

//echo $id;
$veza = new PDO("mysql:dbname=projekat;host=localhost;charset=utf8", "Admin", "admin");
$rezultat = $veza->query("SELECT naslov, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor, slika, detaljnije 
					      FROM novosti 
						  WHERE id=".$id);
     //$rezultat=$veza->query("select * from novosti order by vrijeme desc");
     if (!$rezultat) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }

    foreach ($rezultat as $novosti) {
             $naslov=$novosti['naslov'];
             $autor=$novosti['autor'];
             $datum=$novosti['vrijeme2'];
             $tekst=$novosti['tekst'];
             $detaljnije=$novosti['detaljnije'];
             $slika=$novosti['slika'];
             $id=$novosti['id'];
         }
         print "<img class = 'slika' src ='".htmlentities($slika, ENT_QUOTES)."'>
         		<h2>".htmlspecialchars($naslov, ENT_QUOTES, 'UTF-8')."</h2>
         		<div class='date1'>".htmlentities(date("d.m.Y. (h:i)", $datum), ENT_QUOTES)."</div>
            	<div class = 'autor1'> ".htmlspecialchars($autor, ENT_QUOTES, 'UTF-8')."</div>
          		<p class 'entry-content1'>".htmlspecialchars($detaljnije, ENT_QUOTES, 'UTF-8')."</p>
           

         ";

?>

</div>