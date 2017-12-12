<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
   <h3>Vis alle klasser</h3>
    
    <?php
    $filnavn = "klasse.txt";

    $filoperasjon="r";

    $fil = fopen($filnavn, $filoperasjon); 

    $a = array(); //Denne arrayen inneholder alle de andre under-arrayene

    while($linje = fgets ($fil)){
        if($linje != ""){
            $del = explode(";", $linje);
            $kKode = trim($del[0]);
            $kNavn = trim($del[1]);

            array_push($a, array(($kKode), array($kNavn, $kKode, $kNavn)));
            /*
            array_push($a, array((verdien man vill sortere på), array(verdier i arrayen)));
            */
        }
    }

    sort($a); //sorterer arrayen alfabetisk

    $lengdeJ = count($a); //Finner ut hvor mange arrayer/verdier det er i arrayen

    $testStreng = ""; //Denne verdien lagrer informasjonen som en streng, som senere skal bli skrevet ut

    for($j = 0; $j < $lengdeJ; $j++){ //første for-loop går igjennom hoved-arrayen
        $lengdeK = count($a[$j][1]); //sjekker hvor mange verdier det er inni hver under-array
        for($k = 0; $k < $lengdeK; $k++){ //går igjennom under-arrayen
            $testStreng .= $a[$j][1][$k]; //legger til alle underverdiene til underarrayen
        }
        print("Yrke: " . $a[$j][0] . " Person: " . $testStreng . "<br>"); //Første er yrket, det andre er verdien til denne yrken
        $testStreng = ""; //sletter det som er i strengen, eller så vil alt bli skrivd opp på nytt
    }

    fclose($fil);
    ?>
  </body>
</html>
