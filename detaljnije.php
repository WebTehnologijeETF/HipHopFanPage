<link rel="stylesheet" type="text/css" href="css1.css">

<div = class="post1" id="detaljnije">
<?php

$id= $_REQUEST['id'];

//echo $id;
$veza = new PDO("mysql:dbname=hiphoppage;host=localhost;charset=utf8", "Admin1", "admin");
$rezultat = $veza->query("SELECT naslov, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor, slika, tekst, detaljnije 
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

             $komentari = $veza->query("SELECT COUNT(novost_id) 
                               FROM komentar 
                               WHERE novost_id =".$id);
   			 $broj = $komentari->fetchColumn();

   			 if($broj==1) {
          		$komentar=$broj. " komentar";
          	 }

	     	 elseif($broj>1) {
	       	    $komentar=$broj. " komentara";
	     	 }

	     	 else {
	     	    $komentar="Nema komentara";
	     	 }
         }

         if(strlen($detaljnije)!==0) {
        	 print "<img class = 'slika' src ='".htmlentities($slika, ENT_QUOTES)."'>
	         		<h2>".htmlspecialchars($naslov, ENT_QUOTES, 'UTF-8')."</h2>
	         		<div class='date1'>".htmlentities(date("d.m.Y. (h:i)", $datum), ENT_QUOTES)."</div>
	            	<div class = 'autor1'> ".htmlspecialchars($autor, ENT_QUOTES, 'UTF-8')."</div>
	          		<p class 'entry-content1'>".htmlspecialchars($detaljnije, ENT_QUOTES, 'UTF-8')."</p>
	          	    <small class = 'komentar1'><a onclick='dajKomentar(".$id.")'>".htmlspecialchars(trim($komentar), ENT_QUOTES, 'UTF-8')."</a></small>
	        	   ";
        }
        elseif(strlen($detaljnije)==0) {
        	print "<img class = 'slika' src ='".htmlentities($slika, ENT_QUOTES)."'>
	         		<h2>".htmlspecialchars($naslov, ENT_QUOTES, 'UTF-8')."</h2>
	         		<div class='date1'>".htmlentities(date("d.m.Y. (h:i)", $datum), ENT_QUOTES)."</div>
	            	<div class = 'autor1'> ".htmlspecialchars($autor, ENT_QUOTES, 'UTF-8')."</div>
	          		<p class 'entry-content1'>".htmlspecialchars($tekst, ENT_QUOTES, 'UTF-8')."</p>
	          	    <small class = 'komentar1'><a onclick='dajKomentar(".$id.")'>".htmlspecialchars(trim($komentar), ENT_QUOTES, 'UTF-8')."</a></small>
	        	   ";
        }
?>

</div>
<div class="komentarii">

	<?php 
	/*if($broj==0) {
		echo "</br><p>Nema komentara na ovu vijest.</p><br><br><br>";
		include 'komentari.php';
	}
		else {
			echo "</br></br>";*/
	include 'komentari.php'; 
//}
?>
</div>