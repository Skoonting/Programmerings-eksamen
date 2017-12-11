<?php include("start.html") ?>
    
<form method="post" action="" id="registrer-bilde" name="registrer-bilde" onsubmit="return validateForm()">
  <h3>Bilde</h3>
  <label for="bildeNr"><p>Bildenummer:</p></label>
  <input required name="bildeNr" id="bildenr" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endretilstorebokstaver(this)">

  <label for="opDato"><p>Opplastingsdato:</p></label>
  <input required name="opDato" id="opDato" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endretilstorebokstaver(this)"><br>

  <label for="filNavn"><p>Filnavn:</p></label>
  <input required name="filNavn"  id="filNavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endretilstorebokstaver(this)">

  <label for="beskrivelse"><p>Beskrivelse:</p></label>
  <input required name="beskrivelse" id="beskrivelse" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endretilstorebokstaver(this)"><br>

  <input  class="inputClass" type="submit" value="Registrer" id="registrer" name="registrer">
  <input  class="inputClass" type="reset" value="Nullstill" id="nullstill" name="nullstill">
    
</form> 

  <div id="melding"></div>
  
  <div id="jsOutput"></div>

<script><?php include("bildeJS-validering.js") ?></script>

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

    $filNavn     = mb_strtoupper($filNavn, 'UTF-8'); //Bruker mb_strtoupper for å gjøre teksten til store bokstaver før den blir lagret (mb_strtoupper i stedet for strtoupper siden den tar også med æøå)
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

    /*---------------------------*/
    include("unikBildeID.php");
    /*---------------------------*/

        if($bool1 && $bool2 && $bool3 && $bool4 && $qqq) {

        $filoperasjon = "a";

        $linje = $bildeNr . ";" . $opDato . ";" . $filNavn . ";" . $beskrivelse . "\n";

        $fil = fopen($filnavn, $filoperasjon); 

        fwrite($fil,$linje);

        echo("$bildeNr $opDato $filNavn $beskrivelse");
        }                
}
?>       

<?php include("slutt.html") ?>
