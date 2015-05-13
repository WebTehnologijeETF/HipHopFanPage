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
	
	<div id="homepage">
		<div id="vertical-line"></div>
		<div id="news">
		
			<div id="headline">
				<h3>Novosti</h3>
				<div class="break"></div>
			</div>
			
			<div id="posts">
				
				<article class="post">
					<div class="entry-title">
						<h2 class="full-title"><a href="#">The Miseducation Of Lauryn Hill' Will Be Entered Into the Library of Congress</a></h2>
					</div>
					
					<div class="entry-content">
						<div class="photo">
							<img src="slike/LaurynHill.jpg" alt="slika1">
						</div>
						<div class="date">20MARCH 26, 2015</div>
						<div class="autor">YESHA CALLAHAN</div>
						<p>Each year the Library of Congress selects 25 recordings to add to their archive.
						This year Lauryn Hill’s record-breaking album, The Miseducation of Lauryn Hill, will be included in the 25.
						According to the press release, requirements for inclusion into the archive include recordings 
						that are “culturally, historically, or aesthetically significant” and are at least 10 years old. 
						The Library of Congress gave a lengthy explanation as to why they chose Hill’s debut album.
						<a href="#">Detaljnije...</a>
						</p>
					</div>
					<!--<div class="break"></div>-->
				</article>
				
				<article class="post">
					<div class="entry-title">
						<h2 class="full-title"><a href="#">Eternal E: Eazy E, 20 Years Later</a></h2>
					</div>
					
					<div class="entry-content">
						<div class="photo">
							<img src="slike/EazyE.jpg" alt="slika2">
						</div>
						<div class="date">MARCH 24, 2015</div>
						<div class="autor">JEFF WEISS </div>
						<p>It was 20 years ago this week that Eazy E cruised to that great safehouse in the sky. 
						I’ll never forget first hearing the news that he had AIDS and was dying in Cedars-Sinai.
						The radio station, 92.3 The Beat, kept public vigil. Dre and Cube and Bone Thugs reportedly filed
						in to pay last respects to the legend. The hospital was only about a mile from where I had
						Little League practice and a group of us debated wandering over before quickly realizing that we weren’t exactly wanted. 
						<a href="#">Detaljnije</a>
						</p>
					</div><!--<div class="break"></div>-->
				</article>		
			
				<article class="post">
					<div class="entry-title">
						<h2 class="full-title"><a href="#">Frenkie i Sarajevska filharmonija</a></h2>
					</div>
					
					<div class="entry-content">
						<div class="photo">
							<img src="slike/frenkie.jpg" alt="slika3">
						</div>

						<div class="date">MARCH 27, 2015.</div>
						<div class="autor">FMJam </div>
						<p>U rasprodanom Narodnom pozorištu u Sarajevu, Frenkie je sinoć 
						nastupio sa Sarajevskom filharmonijom gdje je kao gost koncerta 
						izveo pjesmu “Noćna smjena”. Ovo je ujedno bio prvi put da se u BiH 
						ostvari fuzija domaćeg hip hop-a i klasične muzike. “Nevjerovatan osjećaj, 
						ovo je nešto novo za mene i imao sam ogromnu tremu i veliki strah” – izjavio 
						je Frenkie nakon koncerta koji je završen gromoglasnim aplauzom. 
						Bila je ovo i odlična prilika za mlađu publiku da posjeti Narodno pozorište... 
						<a href="#">Detaljnije</a>
						</p>
					</div>
					<!--<div class="break"></div>-->
				</article>
		
				<article class="post">
					<div class="entry-title">
						<h2 class="full-title"><a href="#">Naslov3</a></h2>
					</div>
					
					<div class="entry-content">
						<div class="photo">
							<img src="slike/nas.jpg" alt="slika4">
						</div>
						<div class="date">MARCH 20, 2015.</div>
						<div class="autor">Nas </div>
						<p>I wreck shit so much, the microphone'll need a paint job <br>
						   My brain is incarcerated <br>
						   Live at any jam, I couldn't count all the parks I raided <br>
						   I hold a Mac-11, and attack a reverend <br>
						   I contact 11 L's and max in heaven 
						<a href="#">Detaljnije</a>
						</p>
					</div>
					<!--<div class="break"></div>-->
				</article>
		
		
			</div>
		</div>		
		<div class="desno">
			<div class="recommend">
				<h2>Preporučujemo</h2>
				
					<h4 class="title1"><a href="#">J. Cole - Forest Hills Drive</a></h4>
					<img src="slike/jcole.jpg" alt="JCole">
					<p>Poslušajte novi album <a href="https://soundcloud.com/2014-forest-hills-dr" target="blank">ovdje</a></p>
				
				
					<h4 class="title2"><a href="#">Kendi - Van Dometa</a></h4>
					<img src="slike/kendi.jpg" alt="Kendi">
					<p>Prvi Kendijev album možete download-ovati <a href="http://www.hulkshare.com/bassivity/kendi-van-dometa-www-bassivitydigital-com" target="blank">ovdje</a></p>			
			</div>
		
		
			<div class="quotes">
				
				<h2>Quotes</h2>
				<img src="slike/photo.jpg" alt="photo">
				<p>"blablablalbalblalblalblalbalblabla <br>lblalalblalblablablalbalblablalbl<br>ablalbablalbal"</p>
				<h5 class="Qa">autor</h5>


				<img src="slike/photo.jpg" alt="photo">
				<p>"blablablalbalblalblalblalbalblabla <br>lblalalblalblablablalbalblablalbl<br>ablalbablalbal"</p>
				<h5 class="Qa">autor</h5>

				
				<img src="slike/photo.jpg" alt="photo">
				<p>"blablablalbalblalblalblalbalblabla <br>lblalalblalblablablalbalblablalbl<br>ablalbablalbal"</p>
				<h5 class="Qa">autor</h5>

				
				<img src="slike/photo.jpg" alt="photo">
				<p>"blablablalbalblalblalblalbalblabla <br>lblalaalblalblablablalbalblablalbl<br>ablalbablalbal"</p>
				<h5 class="Qa">autor</h5>
			</div>
		
		</div>
		
	</div>
	<div class="break-footer-hp"></div>
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
