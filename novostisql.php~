<link rel="stylesheet" type="text/css" href="css1.css">
 <div class="post"> 

    <?php
     $veza = new PDO("mysql:dbname=hiphoppage;host=127.11.87.130;charset=utf8", "Admin1", "admin");
     $rezultat = $veza->query("SELECT id, naslov, tekst, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor, slika, detaljnije 
                               FROM novosti 
                               ORDER BY vrijeme DESC");
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
                $det="<a href = '#' onclick='dajDetaljnije(".$id.")'> Detaljnije...</a>";

           
           //$aaa=$veza->query($rezultat);
    // $slika=mysqli_fetch_array($aaa);
  //  $echo '<img src="data:image/jpg;base64, '.base64_encode($slika->load()).' "/>';
  // $slika='<img src="prikaziSliku.php?id='$novosti['id']'">';
           
//ne radi blob u image!!!
           
//<img src =".htmlentities($slika, ENT_QUOTES)." alt = 'slika'>
          // $slika='<img src="prikaziSliku.php?id=1">';
     
    $komentari = $veza->prepare("SELECT COUNT(novost_id) 
                                 FROM komentar 
                                 WHERE novost_id =:id");

    $komentari->bindParam(':id', $id);
    
    if (!$komentari->execute()) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
    $broj = $komentari->fetchColumn();
/*
    foreach ($komentari as $komnt) {
      $novost_id=$komnt['novost_id'];
    }
*/
     if($broj==1) {
          $komentar=$broj. " komentar";
      }

      elseif($broj>1) {
          $komentar=$broj. " komentara";
      }

      else {
        $komentar="Nema komentara";
     }

     print("<div id=pt> <img class='photo' src='".htmlspecialchars(trim($slika), ENT_QUOTES, 'UTF-8')."'>
            <h2 class='full-title'><a>".htmlspecialchars(trim($naslov), ENT_QUOTES, 'UTF-8')."</a></h2>
            <div class='date'>".htmlentities(date("d.m.Y. (h:i)", $datum), ENT_QUOTES)."</div>
            <div class='autor'>".htmlspecialchars(trim($autor), ENT_QUOTES, 'UTF-8')."</div>
            <p class = 'entry-content'>".htmlspecialchars(trim($tekst), ENT_QUOTES, 'UTF-8').$det."</p>
            <small class = 'komentarLabela'><a href = '#' onclick='dajKomentar(".$id.")'>".htmlspecialchars(trim($komentar), ENT_QUOTES, 'UTF-8')."</a></small>
          </div>");

    }
?>
</div>
