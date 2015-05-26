 <link rel="stylesheet" type="text/css1.css" href="">
 <div class="post"> 

    <?php
     $veza = new PDO("mysql:dbname=projekat;host=localhost;charset=utf8", "Admin", "admin");
     $rezultat = $veza->query("select id, naslov, tekst, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor, slika, detaljnije from novosti order by vrijeme desc");
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


             if(strlen($detaljnije)==0)
                $det=" ";
              else
                $det="<a onclick='dajDetaljnije(".$id.")'> Detaljnije...</a>";

           
           //$aaa=$veza->query($rezultat);
    // $slika=mysqli_fetch_array($aaa);
  //  $echo '<img src="data:image/jpg;base64, '.base64_encode($slika->load()).' "/>';
  // $slika='<img src="prikaziSliku.php?id='$novosti['id']'">';
           
//ne radi blob u image!!!
           
//<img src =".htmlentities($slika, ENT_QUOTES)." alt = 'slika'>
          // $slika='<img src="prikaziSliku.php?id=1">';
     
    $komentari = $veza->query("SELECT COUNT(novost_id) 
                               FROM komentar 
                               WHERE novost_id =".$novosti['id']);
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

     print" <img class='photo' src='".htmlspecialchars(trim($slika), ENT_QUOTES, 'UTF-8')."'>
            <h2 class='full-title'><a>".htmlspecialchars(trim($naslov), ENT_QUOTES, 'UTF-8')."</a></h2>
            <div class='date'>".htmlentities(date("d.m.Y. (h:i)", $novosti['vrijeme2']), ENT_QUOTES)."</div>
            <div class='autor'>".htmlspecialchars(trim($autor), ENT_QUOTES, 'UTF-8')."</div>
            <p class = 'entry-content'>".htmlspecialchars(trim($tekst), ENT_QUOTES, 'UTF-8').$det."</p>
            <small class = 'komentar'>".htmlspecialchars(trim($komentar), ENT_QUOTES, 'UTF-8')."</small>
          ";

    }
?>
</div>