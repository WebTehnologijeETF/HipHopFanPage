 <link rel="stylesheet" type="text/css1.css" href="">
   

    <?php
     $veza = new PDO("mysql:dbname=projekat;host=localhost;charset=utf8", "Admin", "admin");
     $rezultat = $veza->query("select id, naslov, tekst, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor, slika from novosti order by vrijeme desc");
     //$rezultat=$veza->query("select * from novosti order by vrijeme desc");
     if (!$rezultat) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
    foreach ($rezultat as $novosti) {
             $naslov=$novosti['naslov'];
             $autor=$novosti['autor'];
             $tekst=$novosti['tekst'];
           //$slika=$novosti['slika'];
           
           //$aaa=$veza->query($rezultat);
    // $slika=mysqli_fetch_array($aaa);
  //  $echo '<img src="data:image/jpg;base64, '.base64_encode($slika->load()).' "/>';
  // $slika='<img src="prikaziSliku.php?id='$novosti['id']'">';
           
//ne radi blob u image!!!

    print "<div class = 'post'>
            <h2 class='full-title'><a>".htmlspecialchars(trim($naslov), ENT_QUOTES, 'UTF-8')."</a></h2>
            <div class='date'>".htmlentities(date("d.m.Y. (h:i)", $novosti['vrijeme2']), ENT_QUOTES)."</div>
            <div class='autor'>".htmlspecialchars(trim($autor), ENT_QUOTES, 'UTF-8')."</div>
            <p >".htmlspecialchars(trim($tekst), ENT_QUOTES, 'UTF-8')."</p>
           <div>";
           
//<img src =".htmlentities($slika, ENT_QUOTES)." alt = 'slika'>
           $slika='<img src="prikaziSliku.php?id=1">';
     
    $komentari = $veza->query("SELECT COUNT(novost_id) 
                               FROM komentar 
                               WHERE novost_id =".$novosti['id']);
    $broj = $komentari->fetchColumn();



      if($broj==1) {
        print "<small>".$broj." komentar</small>";
      }

      elseif($broj>1) {
        print "<small>".$broj." komentara</small>";
        
      }
    

    else print "<small>" . "Nema komentara" . "</small>";
  
   }

?>
