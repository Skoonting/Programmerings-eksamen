<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Bilde</title> 
  </head>
<body>
          <form method="post" action="" id="registrer-bilde" name="registrer-bilde" onsubmit="return validateForm()">
              <h3>Bilde</h3>
              <label for="bildeNr"><p>Bildenummer:</p></label><span id="bildeNrOut"></span>
              <input required name="bildeNr"  id="bildeNr">
              
              <label for="opDato"><p>Opplastingsdato:</p></label><span id="opDatoOut"></span>
              <input required name="opDato" id="opDato"><br>
              
              <label for="filNavn"><p>Filnavn:</p></label><span id="filNavnOut"></span>
              <input required name="filNavn"  id="filNavn">
              
              <label for="beskrivelse"><p>Beskrivelse:</p></label><span id="beskrivelseOut"></span>
              <input required name="beskrivelse" id="beskrivelse"><br>

              <input  class="inputClass" type="submit" value="Registrer" id="registrer" name="registrer">
              <input  class="inputClass" type="reset" value="Nullstill" id="nullstill" name="nullstill">
              
              <span id="jsOutput"></span>
            </form> 
            
            <script><?php include("bildeJS-validering.js"); ?></script>
          
            <?php
            if(isset($_POST['registrer'])){
                
                $filnavn     = "bildetest/bilde.txt";

                $bildeNr     = $_POST["bildeNr"];
                $opDato      = $_POST["opDato"];
                $filNavn     = $_POST["filNavn"];
                $beskrivelse = $_POST["beskrivelse"];

                $bildeNr     = trim($bildeNr);
                $opDato      = trim($opDato);
                $filNavn     = trim($filNavn);
                $beskrivelse = trim($beskrivelse);
                
                $opDato      = mb_strtoupper($opDato, 'UTF-8');
                $filNavn     = mb_strtoupper($filNavn, 'UTF-8');
                $beskrivelse = mb_strtoupper($beskrivelse, 'UTF-8');

                if(!$bildeNr){
                    print("Bildenummer mangeler <br>");
                    $bool1 = false;
                } else {
                    $bool1 = true;
                }
                
                if(!$opDato){
                    print("Opplastingsdato mangeler <br>");
                    $bool2 = false;
                } else {
                    $bool2 = true;
                }
                
                if(!$filNavn){
                    print("Filnavn mangeler <br>");
                    $bool3 = false;
                } else {
                    $bool3 = true;
                }
                
                if(!$beskrivelse){
                    print("Beskrivelse mangeler <br>");
                    $bool4 = false;
                } else {
                    $bool4 = true;
                }
                
                /*----------------------------------------------------------*/
                
                
                
                include("unikBildeID.php");
                
                /*----------------------------------------------------------*/
                
                    if($bool1 == true && $bool2 == true && $bool3 == true && $bool4 == true && $qqq == true) {
                    
                    $filoperasjon = "a";

                    $linje = $bildeNr . ";" . $opDato . ";" . $filNavn . ";" . $beskrivelse . "\n";

                    $fil = fopen($filnavn, $filoperasjon); 

                    fwrite($fil,$linje);

                    echo("$bildeNr $opDato $filNavn $beskrivelse");
                    } else {
                        print("Dette funker ikke");
                    }                
            }
            ?>       
</body>
</html>
