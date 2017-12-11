<?php include("start.html") ?>

<h3>Vis Bilder</h3>

<?php
    $filnavn = "bildetest/bilde.txt";

    $filoperasjon="r";

    $fil = fopen($filnavn, $filoperasjon);

    while($linje = fgets ($fil)){
        if($linje != ""){
            $del = explode(";", $linje);
            $bildeNr     = trim($del[0]);
            $opDato      = trim($del[1]);
            $filNavn     = trim($del[2]);
            $beskrivelse = trim($del[3]);

            print("$bildeNr $opDato $filNavn $beskrivelse <br>");
        }
    }
    fclose($fil);
?>

<?php include("slutt.html") ?>
