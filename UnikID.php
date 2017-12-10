<?php
$filnavn1 = "bildetest/bilde.txt"; 

$filoperasjon1="r";

$fil1 = fopen($filnavn1, $filoperasjon1); 

$eksisterendeBilderArray = array(); //Lager en array som skal ha informasjon i seg hvis det er noe

while($linje1 = fgets ($fil1)){
    if($linje1 != ""){
        $del1 = explode(";", $linje1);
        $kKode1 = trim($del1[0]);

        if($kKode1 == $bildeNr){
            array_push($eksisterendeBilderArray, "hei"); //Jeg valgte bare et random ord
            /*
            Hvis koden man skriver inn i feltet allerede finnes vil den skrive ut et radnom or eller krakter,
            */
        } 
    }
}

if($eksisterendeBilderArray){ //Hvis det er noen ting i arrayen betyr det at det den finnes fra før av i koden, derfor blir den false.
    $qqq = false; //Bare et tilfeldig varable navn, skal endre det etterpå en gang.
    print("Denne koden finnes allerede<br>"); 
} else { //Hvis den er tom betyr det at den ikke fant noen som hadde samme navnet
    $qqq = true;
}
?>   
