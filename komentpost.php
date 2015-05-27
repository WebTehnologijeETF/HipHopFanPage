<!DOCTYPE HTML>
<html>

<head>
	<title>Hip Hop Sneak Attack</title>
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
			<ul class = "meni_ul">
				<li><a id="menu1" onclick="openUrl('index.php')">Home</a></li>
				<li><a id="menu2" href="javascript:void(0);" onclick="subKreiraj('menu2', 'subm2')" onmouseleave="subNestani('subm2')">Tabele</a></li>
				<li><a id="menu3" href="javascript:void(0);" onclick="subKreiraj('menu3', 'subm3')" onmouseleave="subNestani('subm3')">Download</a></li>
				<li><a id="menu4" onclick="openUrl('grafiti.html')">Grafiti</a></li>
				<li><a id="menu5" onclick="openUrl('mixtapes.html')">Mixtapes</a></li>
				<li><a id="menu6" onclick="openUrl('linkovi.html')">Linkovi</a></li>
				<li><a id="menu7" onclick="openUrl('kontakt.html')">Kontakt</a></li>
			</ul>
			<ul class="login_meni">
				<li><a id="menu8" href="#">Log in</a></li>
				<li><a id="menu9" href="#">Sign up</a></li>
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
	
	<div id="komentpost">
	<?php
	$nick=$_POST["nick"];
	$tekst=$_POST["poruka"];
	$email=$_POST["email"];
	$n_id=$_POST["novost_id"];
	//echo $id;
		//echo $nick."<br>";
		//echo $tekst;
	$veza = new PDO("mysql:dbname=hiphoppage;host=localhost;charset=utf8", "Admin1", "admin");

	$send=$veza->prepare("INSERT INTO komentar (novost_id, autor, email, tekst)
					    VALUES (:n_id,:nick,:email,:tekst)");
	$send->bindParam(':n_id', $n_id);
	$send->bindParam(':nick', $nick);
	$send->bindParam(':email', $email);
	$send->bindParam(':tekst', $tekst);

	if (!$send->execute()) {
          $greska = $veza->errorInfo();
          print "<p id = 'poruka_neuspjesno'>SQL greška: ". $greska[2]."</p>";
          //exit();
     }
     else {
     	echo "<p id = 'poruka_uspjesno'>Uspješno ste poslali komentar!</p>";
     	//echo "<br><br><p id=na_pocetak><a onclick='openUrl(index.php)'> Povratak na početnu</a><p>";
     }
	?>

	</div> 
		<footer id="footer">
            <ul class = "sn_icons">
                <li><a href="#"><img src="slike/fb.png" alt="fb logo"></a></li>
                <li><a href="#"><img src="slike/tw.png"  alt="tw logo"></a></li>
                <li><a href="#"><img src="slike/g+.png"  alt="gp logo"></a></li>
				<li><a href="#"><img src="slike/tu.png"  alt="tu logo"></a></li>
            </ul>
           <p>&copy; Nlghtmare</p>
		</footer>	
</div>
			
		<script src="js/skripta.js"></script>
		<script src="js/ajax.js"></script>

</body>



</html>
