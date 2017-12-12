<?php include("start.html") ?>

<h3>Vis Bilder</h3>
<h3>Bildenummer - Opplastingsdato - Filnavn - Beskrivelse</h3>


<?php
    $filnavn = "../filer/bilde.txt";

    $filoperasjon="r";

    $fil = fopen($filnavn, $filoperasjon);
    print("<table>");
    print("<tr><th>Bildenummer</th><th>Opplastingsdato</th><th>Filnavn</th><th>Beskrivelse</th></tr>");

    while($linje = fgets ($fil)){
        if($linje != ""){
            $del = explode(";", $linje);
            $bildeNr     = trim($del[0]);
            $opDato      = trim($del[1]);
            $filNavn     = trim($del[2]);
            $beskrivelse = trim($del[3]);

            print("<tr><td>$bildeNr</td><td>$opDato</td> <td>$filNavn</td> <td>$beskrivelse</td></tr>");
        }
    }
    print("</table>");
    fclose($fil);
?>

<?php include("slutt.html") ?>
