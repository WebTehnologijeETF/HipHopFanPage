<link rel="stylesheet" type="text/css" href="css1.css">

<article class='phpposts'>
<?php

$files = glob('novosti/*.txt', GLOB_BRACE);
    $novosti = array();
    foreach($files as $file) {
        $unos = file($file);
        array_push($novosti, $unos);
    }
    

    usort($novosti, function($prva,$druga){
          $dat1=date('Y-m-d H:i:s', strtotime($prva[0]));
          $dat2=date('Y-m-d H:i:s', strtotime($druga[0]));
          return $dat1<$dat2;
    });

    foreach ($novosti as $dio) {
        $datum = $dio[0];
        $autor = $dio[1];
        $naslov = $dio[2];
        $slika = $dio[3];
        $tekst = "";
        $detaljno = "";
        $tacno = true;
        $detaljnije = false;

        for($i = 4; $i < count($dio); $i++) {
            if(trim($dio[$i]) === "--") {
                $tacno = false;
            }

            if($tacno) {
                $tekst = $tekst." ".$dio[$i];
            }

            else {
                if(trim($dio[$i]) != "--") {
                    $detaljnije = true;
                    $detaljno = $detaljno." ".$dio[$i];
                }
            }
        }
        
        if(!$detaljnije) {
            $detaljnije_ = "";
        }
        else 
           $detaljnije_ = "Detaljnije...";

        print("<div class = 'post'>
            <img src ='".htmlentities($slika, ENT_QUOTES)."' alt = 'slika'>
            <h2 class='full-title'><a>".htmlentities($naslov, ENT_QUOTES)."</a></h2>
            <div class = 'date'>".htmlspecialchars(trim($datum), ENT_QUOTES, 'UTF-8')."</div>
            <div class = 'autor'>".htmlspecialchars(trim($autor), ENT_QUOTES, 'UTF-8')."</div>
            <p class = 'entry-content'>".htmlentities($tekst, ENT_QUOTES)."
            <a onclick='dajDetaljnije()'>".$detaljnije_."</a></p>
            </div>");
    }
?>
</article>

<script src="js/ajax.js"></script>