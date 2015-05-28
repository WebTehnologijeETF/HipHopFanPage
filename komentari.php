<link rel="stylesheet" type="text/css" href="css1.css">
<div class="komentari">
<h2>Komentari</h2><br><br>
<?php

$id=$_REQUEST['id'];

//echo $id;


$veza = new PDO("mysql:dbname=hiphoppage;host=localhost;charset=utf8", "Admin1", "admin");
$komentari = $veza->prepare("SELECT autor, tekst, UNIX_TIMESTAMP(vrijeme) datum, email
						     FROM komentar
						     WHERE novost_id =:id
						     ORDER BY datum asc");

$komentari->bindParam(':id', $id);

 if (!$komentari->execute()) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
 
foreach ($komentari as $komentar) {
		 $autorK=$komentar['autor'];
		 $tekstK=$komentar['tekst'];
		 $datumK=$komentar['datum'];
		 $emailK=$komentar['email'];

	if(strlen($emailK)==0) {

		print "<div class = 'komentar'>
			 		<div class = 'autorK'>".htmlspecialchars(trim($autorK), ENT_QUOTES, 'UTF-8')."</div>
			 		<div class = 'datumK'>".htmlentities(date("d.m.Y. (h:i)", $datumK), ENT_QUOTES)."</div>
			 		<div class = 'entry-content'>".htmlspecialchars(trim($tekstK), ENT_QUOTES, 'UTF-8').$det."<br><br></div>
			 		<br><br>
			  </div>";	
	}
	else {

		print "<div class = 'komentar'>
			 		<div class = 'autorK'><a href = 'mailto: ".$emailK."'>".htmlspecialchars(trim($autorK), ENT_QUOTES, 'UTF-8')."</a></div>
			 		<div class = 'emailK'>".htmlspecialchars(trim($emailK), ENT_QUOTES, 'UTF-8')."</div>
			 		<div class = 'datumK'>".htmlentities(date("d.m.Y. (h:i)", $datumK), ENT_QUOTES)."</div>
			 		<div class = 'entry-content'>".htmlspecialchars(trim($tekstK), ENT_QUOTES, 'UTF-8').$det."<br><br></div>
			 		<br><br>
			  </div>";	
	}
}

?>

<form name="formaKomentari" id="formaKomentari" action="komentpost.php" method="POST">	 
		<br><br> <p id = "unos"><br>Ostavite komentar</p><br><br>
		<div class="Kforma">
			<p id="nick_label"> Ime: *</p>
			<input id="nickK" required="required" type="text" name="nick" value=<?=$nick;?>><br>
			<br>
			<p id="emailK_label">Email: </p>
			<input id="emailK" type="email" name="email" value=<?=$email;?>><br><br>
			<br>
			<input id="novost_idK" name="novost_id" value=<?=$id;?>>			
			<br><br> 
			<textarea id="porK" required="required" name="poruka" rows="10" cols="50" value=<?=$por;?>></textarea>
			<input id="submit" type="submit" value="Submit">
				</div>	


</form>
<?php 
 echo "<h5 class = 'povratak'><a onclick='povratakNaNovost(".$id.")' href='#'> Povratak na vijest</a></h5>";
?>
<!-- pokupit podatke s forme -->
</div>