<!DOCTYPE html>
<html>

<head>
	<title>Kontakt</title>
	<link rel="stylesheet" type="text/css" href="css1.css">
	<META http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/png" href="slike/S1.jpg">
</head>

<body>
<div id="page">
	<header id="header">
		<div class="logo">
			<a onclick="openUrl('index.php')"><img src="slike/logo2c.png" alt="logo"></a>
		</div>
		<p>Hip Hop Sneak Attack</p>
		<div class="grafit">
			<img src="slike/graffiti.png" alt="grafit">
		</div>

		<div id="menu">
			<ul>
				<li><a id="menu1" onclick="openUrl('index.php')">Home</a></li>
				<li><a id="menu2" href="javascript:void(0);" onclick="subKreiraj('menu2', 'subm2')" onmouseleave="subNestani('subm2')">Tabele</a></li>
				<li><a id="menu3" href="javascript:void(0);" onclick="subKreiraj('menu3', 'subm3')" onmouseleave="subNestani('subm3')">Download</a></li>
				<li><a id="menu4" onclick="openUrl('grafiti.html')">Grafiti</a></li>
				<li><a id="menu5" onclick="openUrl('mixtapes.html')">Mixtapes</a></li>
				<li><a id="menu6" onclick="openUrl('linkovi.html')">Linkovi</a></li>
				<li><a id="menu7" onclick="openUrl('kontakt.html')">Kontakt</a></li>
			</ul>
		</div>
	</header>
	<div class="subMenus">
	
		<div class="menuList" id="subm2" onmouseenter="subKreiraj('menu2', 'subm2')" onmouseleave="subNestani('subm2')">
			<ul class="subList">
				<li onclick="openUrl('tables.html')"><a>Top Lista</a></li>
				<li onclick="openUrl('#')"><a>T2</a></li>
			</ul>
		</div>
		
		<div class="menuList" id="subm3" onmouseenter="subKreiraj('menu3', 'subm3')" onmouseleave="subNestani('subm3')">
			<ul class="subList">
				<li onclick="openUrl('#')"><a>Albums</a></li>
				<li onclick="openUrl('#')"><a>Mixtapes</a></li>
				<li onclick="openUrl('#')"><a>Songs</a></li>
			</ul>
		</div>	
</div>

<?php 
//varijable
	$imeErr=$prezimeErr=$emailErr=$telErr=$gradErr=$pbrojErr=$porErr="";
	$ime=$prezime=$email=$tel=$grad=$pbroj=$por="";
	$slikaime=$slikaprezime=$slikaemail=$slikatel=$slikagrad=$slikapbroj=$slikapor="";
	$lnbr="<br/>";
	$valid=true;

//xss protekcija
function unosTexta($txt) {
	$txt=trim($txt);
	$txt=stripcslashes($txt);
	$txt=htmlspecialchars($txt);
return $txt;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
		
//ime
	if(empty($_POST["ime"])) {
		$imeErr="Unesite validno ime (samo slova)!<br/><br/>";
		$slikaime="slike/error.png";
		$valid=false;
	}	
	elseif (!ctype_alpha(trim($_POST["ime"]))) {
		$imeErr="Unesite validno ime (samo slova)!<br/><br/>";
		$slikaime="slike/error.png";
		$valid=false;
	}
	else {
		$ime=unosTexta($_POST["ime"]);
		$slikaime="slike/valid.png";
	}

	
//prezime
	if(empty($_POST["prezime"])) {
		$prezimeErr="Unesite validno prezime (samo slova)!<br/><br/>";
		$slikaprezime="slike/error.png";
		$valid=false;
	}
	elseif (!ctype_alpha(trim($_POST["prezime"]))) {
		$prezimeErr="Unesite validno prezime (samo slova)!<br/><br/>";
		$slikaprezime="slike/error.png";
		$valid=false;
	}
	else {
		$prezime=unosTexta($_POST["prezime"]);
		$slikaprezime="slike/valid.png";
	}
	
//email
	if(empty($_POST["email"])) {
		$emailErr="Unesite validan email (example@example.com)!<br/><br/>";
		$slikaemail="slike/error.png";
		$valid=false;
	}
	elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email nije validan (example@example.com)!<br/><br/>";
        $slikaemail="slike/error.png";
        $valid=false;
    }
    else {
    	$email=unosTexta($_POST["email"]);
    	$slikaemail="slike/valid.png";
    }

//tel
    $tel=($_POST["tel"]);
    $telReg = "/^\+{0,1}[0-9]+[\/-]{0,1}[0-9-]+$/";
    if($tel!="") {
	    if(!preg_match($telReg, $tel)) {
			$telErr="Format nije validan!<br/><br/>";
			$slikatel="slike/error.png";
			$valid=false;
		}	
	}
    else {
    	$tel=unosTexta($_POST["tel"]);
    	$slikatel="slike/valid.png";
    }
//grad
    $grad=($_POST["grad"]);
    if($grad!=""){
	    if (!ctype_alpha(trim($_POST["grad"]))) {
			$gradErr="Mogu biti samo slova!<br/><br/>";
			$slikagrad="slike/error.png";
			$valid=false;
		}
	}
//postanski broj
	$pbroj=($_POST["pbroj"]);
	$numReg = "/^[0-9]+$/i";
	if($pbroj!="") {
		if(!preg_match($numReg, $pbroj)) {
			$pbrojErr="Mogu biti samo brojevi!<br/><br/>";
			$slikapbroj="slike/error.png";
			$valid=false;
		}
	}
	else {
		$pbroj=unosTexta($_POST["pbroj"]);
		$slikapbroj="slike/valid.png";
	}

//por
    if(($_POST["poruka"])===" ") {
		$porErr="Poruka ne može ostati prazna!<br/><br/>";
		$slikapor="slike/error.png";
		$valid=false;
	}
	else {
		$por=unosTexta($_POST["poruka"]);
		$slikapor="slike/valid.png";
	}
}
?>
 
</div>
<div id="kontaktpagephp">
	<div class="textbox">
	<div class="phpispis">
<?php
		if($valid) {

		print "<h4>Provjerite da li ste ispravno popunili kontakt formu</h4><br>";
			
				echo ("Ime: ".$ime);
				print "<br>";
				echo ("Prezime: ".$prezime);
				print "<br>";
				echo ("Email: ".$email);
				print "<br>";
				echo ("Grad: ".$grad);
				print "<br>";
				echo ("Poštanski broj: ".$pbroj);
				print "<br>";
				echo ("Tel: ".$tel);
				print "<br>";
				echo ("Poruka: ".$por);
				print "<br><br>";	
				print("<h4>Da li ste sigurni da želite poslati ove podatke?</h4><br>");			
				print("<form id='sigforma' action='salji.php' method='GET'>
					   		<input id = 'siguran' type='submit' value = 'Siguran sam'>
					   </form><br>");
                print("<h5>Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke.</h5>");
}
else {
	echo ("<p>".($lnbr)."</p><h4>Unos nije validan. Unesite ponovo!<p>".($lnbr).($lnbr)."</p></h4>");
}
?>

</div>
		<form name="forma" id="forma" action="kontakt.php" method="post" >	 
				<br>
				Ime: * <br>
				<input id="ime" required="required"  type="text" name="ime" value=<?=$ime;?>> 
					<?php 
						if($imeErr!="") {
							echo("<img class='eror_ic' id='greskaime src=".($slikaime)."alt='erorslika'> 
								<p class eror_lab> ".$imeErr."</p>");
						}
						else
							echo ("<p>".($lnbr)."</p>");

					 ?>
				Prezime: * <br>
				<input id="prezime" required="required" type="text" name="prezime" value=<?=$prezime;?>>
					<?php 
						if($prezimeErr!="") {
							echo("<img class='eror_ic' id='greskaime src=".($slikaprezime)."alt='erorslika'> 
								<p class eror_lab> ".$prezimeErr."</p>");
						}
						else {
							echo ("<p>".($lnbr)."</p>");
						}
					?>

				Email: * <br>
				<input id="email" required="required" type="email" name="email" value=<?=$email;?>>
					<?php 
						if($emailErr!="") {
							echo("<img class='eror_ic' id='greskaime src=".($slikaemail)."alt='erorslika'> 
								<p class eror_lab> ".$emailErr."</p>");
						}
						else {
							echo ("<p>".($lnbr)."</p>");
						}
					?>

				Tel: <br>
				<input id="tel" type="tel" name="tel" value=<?=$tel;?>>
					<?php 
						if($telErr!="") {
							echo("<img class='eror_ic' id='greskaime src=".($slikatel)."alt='erorslika'> 
								<p class eror_lab> ".$telErr."</p>");
						}
						else {
							echo ("<p>".($lnbr)."</p>");
						}
					?>

				Grad: <br>
				<input id="grad" type="text" name="grad" value=<?=($_POST["grad"]);?>>
					<?php 
						if($gradErr!="") {
							echo("<img class='eror_ic' id='greskaime src=".($slikagrad)."alt='erorslika'> 
								<p class eror_lab> ".$gradErr."</p>");
						}
						else {
							echo ("<p>".($lnbr)."</p>");
						}
					?>

				Postanski broj: <br>
				<input id="pbroj" type="text" name="pbroj" value=<?=($_POST["pbroj"]);?>> 
					<?php 
						if($pbrojErr!="") {
							echo("<img class='eror_ic' id='greskaime src=".($slikapbroj)."alt='erorslika'> 
								<p class eror_lab> ".$pbrojErr."</p>");
						}
						else {
							echo ("<p>".($lnbr)."</p>");
						}
					?>
					<br>
				Poruka: * <br>
				<textarea id="por" required="required" name="poruka" rows="10" cols="50" value=<?=$por;?>></textarea> 
				<input id="submit" type="submit" value="Submit">
					<?php 
						if($porErr!="") {
							echo("<img class='eror_ic' id='greskaime src=".($slikapor)."alt='erorslika'> 
								<p class eror_lab> ".$porErr."</p>");
						}
					?>	
				<!--<button id="posalji" type="submit" onclick="validiraj()"></button>-->
						
		</form>
	</div>
</div>

		<div class="break-footer"></div>
	<footer id="footer">
        <ul class = "sn_icons">
            <li><a href="#"><img src="slike/fb.png"  alt="fb logo"></a></li>
            <li><a href="#"><img src="slike/tw.png"  alt="tw logo"></a></li>
            <li><a href="#"><img src="slike/g+.png"  alt="gp logo"></a></li>
			<li><a href="#"><img src="slike/tu.png"  alt="tu logo"></a></li>
        </ul>
       <p>&copy; Nlghtmare</p>
	</footer> 
		
</div>
	<script src="js/kontakt.js"></script> 
	<script src="js/skripta.js"></script>
	<script src="js/ajax.js"></script>

</body>
</html>