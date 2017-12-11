<?php
    function validerpasientnavn($pasientnavn) /* Funksjon som sjekker pasient-navn */
        {
            $riktigpasientnavn=true;

            if (!$pasientnavn) /* Vis pasient-navn ikke er tastet inn */
            {
                $riktigpasientnavn=false;
            }

            else if (is_numeric($pasientnavn)) /* Vis pasient-navn bruker tall */
            {
                $riktigpasientnavn=false;
            }

            return $riktigpasientnavn;
        }

    function validerpasientid($pasientid) /* Funksjon som sjekker om pasient-id bruker 2-3 bokstaver */
        {
            $riktigpasientid=true;

            if (!$pasientid) /* Vis pasient-id ikke er tastet inn */
                {
                   $riktigpasientid=false;
                }

            else if (strlen($pasientid)!=2 && strlen($pasientid)!=3) /* Vis pasient-id ikke er 2 eller 3 tegn */
                {
                   $riktigpasientid=false;
                }

            else if (is_numeric($pasientid)) /* Vis pasient-id bruker tall */
                {
                    $riktigpasientid=false;
                }

            return $riktigpasientid;
        }

    function validerunikID($pasientID) /* Funksjonen som sjekker om pasient-id er unik */
        {
            $unikpasientID=true;

            $filnavnID = "../../filer/pasient.txt"; 

            $filoperasjonID="r";

            $fil1 = fopen($filnavnID, $filoperasjonID); 

            $eksisterendePasientID = array(); /* Lager en array som skal ha informasjon i seg hvis det er noe */

            while ($linjeID = fgets ($fil1))
                {
                    if ($linjeID != "")
                        {
                            $delID = explode(";", $linjeID);
                            $pasientnavn = trim($delID[0]);
                            $lagretPasientID = trim($delID[1]);

                            if ($lagretPasientID == $pasientID)
                                {
                                    array_push($eksisterendePasientID, "hei"); //Jeg valgte bare et random ord
                                    /*
                                    Hvis koden man skriver inn i feltet allerede finnes vil den skrive ut et radnom or eller krakter,
                                    */
                                } 
                        }
                }

            if($eksisterendePasientID) //Hvis det er noen ting i arrayen betyr det at det den finnes fra før av i koden, derfor blir den false.
                { 
                    $unikpasientID = false;
                } 

            else //Hvis den er tom betyr det at den ikke fant noen som hadde samme navnet
                { 
                    return $unikpasientID;
                }
    
        }
?>