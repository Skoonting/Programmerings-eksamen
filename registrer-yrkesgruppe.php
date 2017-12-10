<?php /* Registrer yrkesgruppe. */

include("start.html");
?>


<h3>Registrer yrkesgruppe</h3>

<form method="post" action="" id="regyrkesgruppe" name="regyrkesgruppe" >

			Yrkesgruppe:			<input type="text" id="yrkesgruppe" name="yrkesgruppe" onFocus="fokus(this)" onBlur="mistetfokus(this)" onMouseOver="musinn(this)" onMouseOut="musut()" onChange="endretilstorebokstaver(this)" required /> <br/>
									<input type="submit" value="Registrer yrkesgruppe" id="fortsett" name="fortsett" />
									<input type="reset" value="Fjern inntasting" id="nullstill" name="nullstill" />
</form>

<div id="javamelding"></div>
<br>
<div id="javavalidering"></div>
<br>
<div id="melding"></div>

<?php
if (isset($_POST["fortsett"]))
{

	$filnavn="../../filer/yrkesgruppe.txt";
	
	include("yrkesgruppe-validering.php");
	
    $yrkesgruppe=$_POST ["yrkesgruppe"];
	
	$lovligyrkesgruppe=valideryrkesgruppe($yrkesgruppe);


	if (!$lovligyrkesgruppe)
	{
		print("Navn på yrkesgrupper kan ikke inneholde sifre eller symboler; bare bokstaver.");
	}	
	

	include("regyrkesgruppe.php");
	

   if ($yrkesgruppe && $lovligyrkesgruppe && $regyrkesgruppe)
    {
        $filoperasjon="a";
        
        $linje=($yrkesgruppe . "," . "\r\n");
        
        $fil=fopen($filnavn,$filoperasjon);
        
        fwrite($fil,$linje); 
        
        fclose($fil);
        
        print("Yrkesgruppen $yrkesgruppe ble registrert.");
    }
}

?>


<?php
include("slutt.html");
?>