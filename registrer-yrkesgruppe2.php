<?php /* Registrer yrkesgruppe. */

include("start.html");
?>

<h3>Registrer yrkesgruppe</h3>

<form method="post" action="registrer-yrkesgruppe2.php" id="regyrkesgruppe" name="regyrkesgruppe" >

			Yrkesgruppe:			<input type="text" id="yrkesgruppe" name="yrkesgruppe" required /> <br/>
									<input type="submit" value="Registrer yrkesgruppe" id="fortsett" name="fortsett" />
									<input type="reset" value="Fjern inntasting" id="nullstill" name="nullstill" />
</form>

<div id="javamelding"></div>
<br>
<div id="javavalidering"></div>
<br>
<div id="melding"></div>

<?php

    $filyrkesgruppe="../../filer/yrkesgruppe.txt";
	
if (isset($_POST["fortsett"]))
{
	
	include("yrkesgruppe-validering.php");
	
    $yrkesgruppe=$_POST["yrkesgruppe"];
	$yrkesgruppe=trim($yrkesgruppe);
	$yrkesgruppe=strtoupper($yrkesgruppe);
	
	$lovligyrkesgruppe=valideryrkesgruppe($yrkesgruppe);
	$regyrkesgruppe=yrkesgruppeexist($yrkesgruppe);
	


    if (!$yrkesgruppe)
    {
        print("Feltet må fylles ut.");
    }
	if (!$regyrkesgruppe)
	{
		print("Den angitte yrkesgruppen er allerede registrert.");
	}
	
    if ($yrkesgruppe && $lovligyrkesgruppe && $regyrkesgruppe)
    {
        $filoperasjon="a";
        
        $linje=($yrkesgruppe . "," . "\r\n");
        
        $filyrkesgruppe=fopen($filyrkesgruppe,$filoperasjon);
        
        fwrite($filyrkesgruppe,$linje); 
        
        fclose($filyrkesgruppe);
        
        print("Yrkesgruppen $yrkesgruppe ble registrert.");
    }
}

include("slutt.html");

?>