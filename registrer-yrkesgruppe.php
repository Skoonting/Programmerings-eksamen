<?php /* Registrer yrkesgruppe. */
	
include("start.html");

?>

<h3>Registrer yrkesgruppe</h3>
	<form method="post" action="registrer-yrkesgruppe.php" id="regyrkesgruppe" name="regyrkesgruppe" onSubmit="return validering()">
		Tast inn yrkesgruppens navn: <input type="text" id="yrkesgruppe" name="yrkesgruppe" onFocus="fokus(this)" onBlur="mistetfokus(this)" onMouseOver="musinn(this)" onMouseOut="musut()" onChange="endretilstorebokstaver(this)" required /> <br />
		<input type="submit" value="Registrer" id="fortsett" name="fortsett" />
		<input type="reset" value="Nullstill feltet" id="nullstill" name="nullstill" onClick="fjernmelding()" />
	</form>

<div id="melding"></div>
<br>
<div id="javavalidering"></div>
<br>
<div id="javamelding"></div>


<?php

if (isset($_POST["fortsett"])) 
{
	
	/* Skriver til fil. */
	
	
	$filyrkesgruppe="../filer/yrkesgruppe.txt"; /* Kontroller mappestruktur. */
	
	include("yrkesgruppe-validering.php");
	
	
	$yrkesgruppe=$_POST["yrkesgruppe"];
	$yrkesgruppe=trim($yrkesgruppe);
	$yrkesgruppe=strtoupper($yrkesgruppe);
	
	$lovligYrkesgruppe=validerYrkesgruppe($yrkesgruppe); /* Validerer at yrkesgruppe ikke består av sifre eller symboler. */
	$regYrkesgruppe=validerRegYrkesgruppe($yrkesgruppe); /* Validerer at yrkesgruppe er allerede registrert. */
	
	
	if (!$yrkesgruppe) 
	{
		print ("Feltet må fylles ut. <br>");
	}
	
	if ($yrkesgruppe && $lovligYrkesgruppe)
	{
		$filoperasjon="a"; 

		$linje=trim($yrkesgruppe . "," . "\r\n"); 

		$filyrkesgruppe=fopen($filyrkesgruppe,$filoperasjon); 

		fwrite($filyrkesgruppe,$linje);

		fclose($filyrkesgruppe);

		print("Yrkesgruppen '$yrkesgruppe' ble registrert.");
	}
}

?>

<?php

include("slutt.html");

?>