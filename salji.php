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


 

<div id="saljipagephp">
	

<?php 
require ("sendgrid-php/sendgrid-php.php");

function unosTexta($txt){
	$txt=trim($txt);
	$txt=stripcslashes($txt);
	$txt=htmlspecialchars($txt);
	return $txt;
}

//sendgrid_013f7
// get account info from OpenShift environment variable
$service_plan_id = "sendgrid_013f7"; // your OpenShift Service Plan ID
$account_info = json_decode(getenv($service_plan_id), true);

$asendgrid = new SendGrid($account_info['username'], $account_info['password']);
$email    = new SendGrid\Email();

$email->addTo("lejla.a36@gmail.com")
	  ->addCc("lejla_agic@hotmail.com")
      ->setFrom("lagic1@etf.unsa.ba")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

try {
	    $sendgrid->send($email);
	    print "<br><h2>Mail je uspješno poslan!</h2><br>";
		print "<a href='index.php' id='back'>Vrati se na početnu!</a>";
} 
catch(\SendGrid\Exception $e) {
	    echo $e->getCode();
	    foreach($e->getErrors() as $er) {
        	echo $er;
    }
 }
?>
		

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