<?php
    $filnavn = "klasse.txt";

    $filoperasjon="r";

    $fil = fopen($filnavn, $filoperasjon); 

    $a = array(); //Denne arrayen inneholder alle de andre under-arrayene

    while($linje = fgets ($fil)){
        if($linje != ""){
            $del = explode(";", $linje);
            $kKode = trim($del[0]); //dette er yrkesgruppe
            $kNavn = trim($del[1]); //dette er fornavn
            $eNavn = trim($del[2]); //dette er etternavn
            $yNavn = trim($del[3]); //dette er ID
            //Kan være lurt å navn på variablene

            array_push($a, array(($kKode), array($eNavn, $kNavn, $yNavn)));
            /*
            array_push($a, array((verdien man vill sortere på), array(verdier i arrayen)));
            */
        }
    }

    sort($a); //sorterer arrayen alfabetisk

    $lengdeJ = count($a); //Finner ut hvor mange arrayer/verdier det er i arrayen

    $testStreng = ""; //Denne verdien lagrer informasjonen som en streng, som senere skal bli skrevet ut
    
    
    print("<table>");
    print("<tr><th>Yrke</th><th>Etternavn</th><th>Fornavn</th><th>ID</th></tr>");
    
    for($j = 0; $j < $lengdeJ; $j++){ //første for-loop går igjennom hoved-arrayen
        
        $lengdeK = count($a[$j][1]); //sjekker hvor mange verdier det er inni hver under-array
        
        for($k = 0; $k < $lengdeK; $k++){ //går igjennom under-arrayen
            $testStreng .= "<td>".$a[$j][1][$k]."</td>"; //legger til alle underverdiene til underarrayen
        }
        print("<tr><td>" . $a[$j][0] . "</td>" . $testStreng . "</tr>"); //Første er yrket, det andre er verdien til denne yrken
        $testStreng = ""; //sletter det som er i strengen, eller så vil alt bli skrivd opp på nytt
    }
    
    print("</table>");
    

    fclose($fil);
?>
