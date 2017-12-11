<?php
    include ("start.html");
?>

        <h2>Registerer pasient</h2>
        
        <form method="post" action="registrer-pasient.php" id="registrerpasient" name="registrerpasient">    
            Pasient-navn <input type="text" id="pasientnavn" name="pasientnavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required/>
            <br /> <br />
            Pasient-id <input type="text" id="pasientID" name="pasientID" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required/> 
            <br /> <br />
            <input type="submit" value="Registrer" id="fortsett" name="fortsett" /> 
            <input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernmelding()"/> <br /> 
        </form>
        
            <div id="melding"></div>
            <div id="feilmelding"></div>
        
<?php
            if (isset($_POST ["fortsett"])) /* PHP-koden vil kunne aktivere dersom 'Fortsett' er trykt */
                {
                    $filnavn="../../filer/pasient.txt";    
                
                    include("validerPasient.php"); /* Inkluderer php koden som skal validere pasient-navn og pasient-id */
                                    
                    $pasientnavn=$_POST["pasientnavn"];
                    $pasientnavn=trim($pasientnavn);    
                    $pasientnavn=strtoupper($pasientnavn);

                    $pasientID=$_POST["pasientID"];
                    $pasientID=trim($pasientID);
                    $pasientID=strtoupper($pasientID);

                    $riktigpasientID=validerpasientID($pasientID);
                    $riktigpasientnavn=validerpasientnavn($pasientnavn);
                    $unikpasientID=validerunikID($pasientID);
        
                    if (!$riktigpasientID) /* Vis pasient-id ikke er riktig tastet inn. Pasient-id skal ha 2-3 tegn, og kan ikke bestå av tall */
                        {
                            print ("Pasient-id er ikke blitt riktig tastet inn. Pasient-id må bestå av 2-3 bokstaver. <br />");
                        }
                
                    if (!$riktigpasientnavn) /* Vis pasient-navn ikke er riktig. Pasient-navn kan ikke bestå av tall */
                        {
                            print ("Pasient-navn er ikke blitt riktig tastet inn. Pasient-navn må bli fylt ut, og skal bestå av bokstaver. <br />");
                        }

                    if (!$unikpasientID) /* Vis pasient-id ikke er unik */
                        {
                            print ("Pasient-id er allerede i bruk. Vennligst prøv på nytt. <br />");
                        }

                    if ($riktigpasientID && $riktigpasientnavn && $unikpasientID) /* Vis validasjon er riktig */
                        {
                            $filoperasjon="a";
                        
                            $linje=($pasientnavn. ";". $pasientID. "\r\n");

                            $fil=fopen($filnavn,$filoperasjon);

                            fwrite($fil,$linje);

                            fclose($fil);

                            print("$pasientnavn er nå registrert med $pasientID som pasient-id.");
                        }
                 }
?>

<?php
    include ("slutt.html");     
?>