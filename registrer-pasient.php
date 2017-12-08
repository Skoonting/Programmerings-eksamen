<!DOCTYPE html>
<html lang="no">
    <head>
        <title>Registrer pasient</title>
        <meta charset=utf-8>

    </head>
    <body>
        
        
        <h2>Registerer pasient</h2>
        
        <form method="post" action="registrer-pasient.php" id="registrerpasient" name="registrerpasient">
            
            Pasient-navn <input type="text" id="registrerpasientnavn" name="registrerpasientnavn" onKeyUp="vis(this.value)" onFocus="fokus(this)" onBlur="mistetfokus(this)" onMouseOver="musover(this)" onMouseOut="musut()" required/> <br /> <br />
            
            Pasient-id <input type="text" id="registrerpasientID" name="registrerpasientID" onKeyUp="vis(this.value)" onFocus="fokus(this)" onBlur="mistetfokus(this)" onMouseOver="musover(this)" onMouseOut="musut()" required/> <br /> <br />
            
            <input type="submit" value="Registrer" id="fortsett" name="fortsett" /> 
            <input type="reset" value="Nullstill" id="nullstill" name="nullstill" onClick="fjernmelding()"/> <br /> 
        </form>
        
            <div id="melding"></div>
            <div id="feilmelding"></div>
        
            <?php
            if (isset($_POST ["fortsett"]))
                {
                    include("validerpasient.php");
                    
                    $filnavn="../../filer/pasient.txt";
                    
                    $pasientnavn=$_POST ["registrerpasientnavn"];
                    $pasientID=$_POST ["registrerpasientID"];

                    $riktigpasientID=validerpasientID($pasientID);
                    $riktigpasientnavn=validerpasientnavn($pasientnavn);
                    $unikpasientID=validerRegpasient($pasientID);

                        
                    if (!$riktigpasientID)
                        {
                            print ("Pasient-id er ikke blitt riktig tastet inn. Pasient-id må bestå av 2-3 bokstaver.");
                        }
                
                    if (!$riktigpasientnavn)
                        {
                            print ("Pasient-navn er ikke blitt riktig tastet inn. Pasient-navn må bli fylt ut, og skal bestå av bokstaver.");
                        }
                        
                    if (!$unikpasientID)
                        {
                            print("Angitt pasient-id er allerede i bruk.");
                        }
                
                    if ($riktigpasientID && $pasientnavn && $unikpasientID)
                        {
                            $filoperasjon="a";

                            $linje=($pasientnavn . ";" . $pasientID . "\r\n");

                            $fil=fopen($filnavn,$filoperasjon);

                            fwrite($fil,$linje);

                            fclose($fil);

                            print("$pasientnavn er nå registrert med $pasientID som pasient-id.");
                        }
                 }
            ?>
    </body>
    
</html>