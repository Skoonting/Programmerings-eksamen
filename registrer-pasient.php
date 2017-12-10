<!DOCTYPE html>
<html lang="no">
    <head>
        <title>Registrer pasient</title>
        <meta charset=utf-8>

    </head>
    <body>
        
        <h2>Registerer pasient</h2>
        
        <form method="post" action="registrer-pasient.php" id="registrerpasient" name="registrerpasient">
            
            Pasient-navn <input type="text" id="pasientnavn" name="pasientnavn" onFocus="fokus(this)" onBlur="mistetfokus(this)" onMouseOver="musover(this)" onMouseOut="musut()" onChange="endretilstorebokstaver(this)" required/> <br /> <br />
            
            Pasient-id <input type="text" id="pasientID" name="pasientID" onFocus="fokus(this)" onBlur="mistetfokus(this)" onMouseOver="musover(this)" onMouseOut="musut()" onChange="endretilstorebokstaver(this)" required/> <br /> <br />
            
            <input type="submit" value="Registrer" id="fortsett" name="fortsett" /> 
            <input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernmelding()"/> <br /> 
        </form>
        
            <div id="melding"></div>
            <div id="feilmelding"></div>
        
            <?php
            if (isset($_POST ["fortsett"]))
                {
                
                    $filnavn="../../filer/pasient.txt";    
                
                    include("validerPasient.php");
                                    
                    
                    $pasientnavn=$_POST["pasientnavn"];

                    $pasientID=$_POST["pasientID"];


                    $riktigpasientID=validerpasientID($pasientID);
                    $riktigpasientnavn=validerpasientnavn($pasientnavn);

                    
                
                        
                    if (!$riktigpasientID)
                        {
                            print ("Pasient-id er ikke blitt riktig tastet inn. Pasient-id må bestå av 2-3 bokstaver.");
                        }
                
                    if (!$riktigpasientnavn)
                        {
                            print ("Pasient-navn er ikke blitt riktig tastet inn. Pasient-navn må bli fylt ut, og skal bestå av bokstaver.");
                        }
                        
                    include("unikpasientID.php");
                

                
                    if ($riktigpasientID && $pasientnavn && $unikpasientID)
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
    </body>
    
</html>