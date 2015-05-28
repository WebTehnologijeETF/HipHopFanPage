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
	
	<div id="homepage">
					
			<div id="headline">
				<h3>Novosti</h3>
				<div class="break"></div>
			</div>
	
			<div id="posts">
			<?php include "novostisql.php";	?>
		</div>
		
		<div class="desno">
			
			<div class="preporucujemo">
				<h2>Preporučujemo</h2>
			</div>

			<div class="recommend">
					<h4 class="title4"><a href="#">Jedi Mind Tricks - <br>Fraudulent Cloth ft. Eamon</a></h4>
					<iframe width="310" height="205"	
						src="https://www.youtube.com/embed/xnXtY5_djjI">
					</iframe class="JMT">
					<p>From the new Jedi Mind Tricks "The Thief and the Fallen" album available everywhere June 2nd</p>
					
					<h4 class="title0"><a href="#">Juice - HIPHOPIUM 3</a></h4>
					<img src="slike/sdju.png" alt="Juice">
					<p>Poslušajte novi album <a href="http://www.deezer.com/album/10343950" target="blank">ovdje</a></p>
					
					<h4 class="title3"><a href="#">Smoke Mardeljano - <br> Znaš me, znam te</a></h4>
					<img src="slike/smoke.png" alt="Smoke">
					<p>Poslušajte novi album <a href="http://www.deezer.com/playlist/1074252191" target="blank">ovdje</a></p>

				<!--
					<h4 class="title1"><a href="#">J. Cole - Forest Hills Drive</a></h4>
					<img src="slike/jcole.jpg" alt="JCole">
					<p>Poslušajte novi album <a href="https://soundcloud.com/2014-forest-hills-dr" target="blank">ovdje</a></p>
				
									<h4 class="title2"><a href="#">Kendi - Van Dometa</a></h4>
					<img src="slike/kendi.jpg" alt="Kendi">
					<p>Prvi Kendijev album možete download-ovati <a href="http://www.hulkshare.com/bassivity/kendi-van-dometa-www-bassivitydigital-com" target="blank">ovdje</a></p>			
			-->
			</div>
		
			<div class="quotes">
				
				<h2>Quotes</h2>
				<div class="quote">
					<img src="slike/tkweli.png" alt="photo">
					<p>"You'll try to change the world <br> So please excuse me while I laugh..."</p>
					<h5 class="Qa">Talib Kweli</h5>
				</div>
				<div class="quote">
					<img src="slike/IT.png" alt="photo">
					<p>"And I refuse to be concerned with condescending advice, 'cause I'm the only motherfucka that can change my life."</p>
					<h5 class="Qa">Immortal Technique</h5>
				</div>
				<div class="quote">
					<img src="slike/common.png" alt="photo">
					<p>"Never looking back or too far in front of me, the present is a gift, and I just want to Be!"</p>
					<h5 class="Qa">Common</h5>
				</div>
				<div class="quote">
					<img src="slike/eminem.png" alt="photo">
					<p>"No matter where you run, I'll be right there, right behind you, in your nightmares..."</p>
					<h5 class="Qa">Eminem</h5>
				</div>
				<div class="quote">
					<img src="slike/lowkey1.png" alt="photo">
					<p>"This album has been in the making a quarter century, born to bless the beat and rap over recorded melody, I knew the truth since I was a small little boy I am a product of the system I was born to destroy"</p>
					<h5 class="Qa">Lowkey</h5>
				</div>
				<div class="quote">
					<img src="slike/pac.png" alt="photo">
					<p>"Reality is wrong. Dreams are for real."</p>
					<h5 class="Qa">autor</h5>
				</div>
			</div>
		
		</div> 
		
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
