<link rel="stylesheet" type="text/css" href="css1.css">

<?php

$id=$_REQUEST['id'];

//echo $id;


$veza = new PDO("mysql:dbname=projekat;host=localhost;charset=utf8", "Admin", "admin");
$komentari = $veza->query("SELECT autor, tekst, UNIX_TIMESTAMP(vrijeme) datum 
						   FROM komentar
						   WHERE novost_id =".$id."
						   ORDER BY datum asc");
 if (!$komentari) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
 
foreach ($komentari as $komentar) {
		 $autorK=$komentar['autor'];
		 $tekstK=$komentar['tekst'];
		 $datumK=$komentar['datum'];

		 
		 
		 
	print "<div class = 'komentar'>
		 		<div class = 'autorK'>".htmlspecialchars(trim($autorK), ENT_QUOTES, 'UTF-8')."</div>
		 		<div class = 'datumK'>".htmlentities(date("d.m.Y. (h:i)", $datumK), ENT_QUOTES)."</div>
		 		<div class = 'entry-content'>".htmlspecialchars(trim($tekstK), ENT_QUOTES, 'UTF-8').$det."<br><br></div>
		 		<br><br>
		  </div>";	

}

?>

<form name="formaKomentari" id="formaKomentari" action="#" method="POST">	 
		<br><br> <p class = "unos"><br>Ostavite komentar</p><br><br>
		<div class="Kforma">
			Ime: *<br>
			<input id="nick" required="required" type="text" name="ime" value=<?=$nick;?>><br>
			<br>
			Email: <br>
			<input id="email" type="email" name="email" value=<?=$email;?>><br><br>
			<br>
			<br><br> 
			<textarea id="por" required="required" name="poruka" rows="10" cols="50" value=<?=$por;?>></textarea>
			<input id="submit" type="submit" value="Submit">
						
		</div>	


</form>
<!-- pokupit podatke s forme -->