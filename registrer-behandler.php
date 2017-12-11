<?php 

include("start.html");

?>

<h3> Registrer behandler</h3>
	<form method="post" action="registrer-behandler.php" id="regbehandler" name="regbehandler" onSubmit="return lovligbilde()">
		BehandlerID: <input type="text" id="behandlerID" name="behandlerID" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required /> <br>
		Fornavn: <input type="text" id="fornavn" name="fornavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required /> <br>
		Etternavn:<input type="text" id="etternavn" name="etternavn" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required /> <br>
		Yrkesgruppe:<input type="text" id="yrkesgruppe" name="yrkesgruppe" onKeyUp="vis(this.value)" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required /> <br>
		Bildenr:<input type="text" id="bildenr" name="bildenr" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required /> <br>
		Maks antall pasienter:<input type="text" id="maksAntall" name="maksAntall" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required /> <br>
		<input type="submit" value="Registrer" id="fortsett" name="fortsett" /> 
		<input type="reset" value="Nullstill feltene" id="nullstill" name="nullstill" onClick="fjernmelding()"/>
	</form>
	
	
<div id="melding"></div>
<br>
<div id="javavalidering"></div>
<br>

<div id="javamelding"></div>


<?php

if (isset($_POST ["fortsett"]))
 {

/* skrive til fil */ 

$filbehandler="../filer/behandler.txt";




include("behandler-validering.php"); 



$behandlerID=$_POST ["behandlerID"];
$behandlerID=trim($behandlerID);
$behandlerID=strtoupper($behandlerID);

$fornavn=$_POST ["fornavn"];
$fornavn=trim($fornavn);
$fornavn=strtoupper($fornavn);

$etternavn=$_POST ["etternavn"];
$etternavn=trim($etternavn);
$etternavn=strtoupper($etternavn);


$yrkesgruppe=$_POST ["yrkesgruppe"];
$yrkesgruppe=trim($yrkesgruppe);
$yrkesgruppe=strtoupper($yrkesgruppe);

$bildenr=$_POST ["bildenr"];
$bildenr=trim($bildenr);
$bildenr=strtoupper($bildenr);

$maksAntall=$_POST ["maksAntall"];
$maksAntall=trim($maksAntall);
$maksAntall=strtoupper($maksAntall);


$lovligbildenr=validerbildenr($bildenr);                  /* validerer at bilde er 3 sifre */ 
$lovligmaksAntall=validermaksantall($maksAntall);			/* Validerer at pasienter er mer enn 0 */ 
$regbilde=validerRegbilde($bildenr);                     /* Sjekker at bilde er registert */ 
$regID=validerbehandlerid($behandlerID);				/* sjekker at ID ikke allerede finnes */ 
$lovligyrkesgruppe=lovligyrkesgruppe($yrkesgruppe);   /* sjekker alt yrkesgruppe finnes */ 

if (!$behandlerID)
	{
		Print ("BehandlerID må fylles ut <br>");
	}
	
if (!$fornavn) 
	{
		Print ("Fornavn må fylles ut <br>");
	}

if (!$etternavn) 
	{
		Print ("Etternavn må fylles ut <br>");
	}

if (!$yrkesgruppe) 
	{
		Print ("Yrkesgruppe må fylles ut <br>");
	}

if (!$lovligbildenr) 
	{
		Print ("Bildenr må fylles ut med tre sifre <br>");
	}
	
	


if (!$lovligmaksAntall) 
	{
		Print ("Maks antall pasienter må fylles ut og være mer enn 1 <br>");
	
	}

if (!$regbilde)
	{	
		print ("Bildenummeret er ikke registrert <br>");  

	}
	
if (!$regID) 
	{	
		print ("BehandlerID finnes allerede <br>"); 	
		
	}	

if (!$lovligyrkesgruppe)
	{	
		print ("Yrkesgruppen finnes ikke <br>"); 
	
	}
	
		
if ($behandlerID && $fornavn && $etternavn && $yrkesgruppe && $lovligbildenr  && $lovligmaksAntall && $regbilde && $regID && $lovligyrkesgruppe)  

	{	
		$filoperasjon="a"; 
		
		   
		$behandlerlinje=($behandlerID. ",". $fornavn.",". $etternavn. ",". $yrkesgruppe. ",". $bildenr. ",". $maksAntall. ",". "\r\n");
			
		
		
		$filbehandler=fopen($filbehandler, $filoperasjon);
		
		
		fwrite($filbehandler, $behandlerlinje);  /* skrive */ 
		
		
		fclose($filbehandler);		/* lukke */ 
		
		print ("$fornavn $etternavn er registrert med ID $behandlerID til yrkesgruppen $yrkesgruppe med bilde $bildenr. Maks antall pasienter: $maksAntall <br>");	
		
	}	
	
 }

?>	


<?php

include ("slutt.html");
?>