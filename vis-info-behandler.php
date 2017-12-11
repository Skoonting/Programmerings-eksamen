<?php 

include("start.html");

?>

<h3> Vis info om angitt behandler</h3>
	<form method="post" action="vis-info-behandler.php" id="infobehandler" name="infobehandler" onSubmit="return validering()">
		Angi BehandlerID: <input type="text" id="sok" name="sok" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required /> <br>
		<input type="submit" value="Søk" id="fortsett" name="fortsett" /> 
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

/* lese fil */ 

$filbehandler="../filer/behandler.txt";
$filbilde="../filer/bilde.txt";
include("behandler-validering.php");

$sok=$_POST ["sok"];
$sok=trim($sok);

$lovligbehandler=lovligbehandler($sok);



if (!$sok) 
	{
		print ("Søkefeltet må fylles ut <br>");
	}
	
if (!$lovligbehandler) 
	{	
		print ("BehandlerID finnes ikke <br>"); 
	}
	
else	

{	
$filoperasjon="r";    /* read = lesing */ 
  

print ("Informasjon om behandler: $sok <br> <br>"); 

$fil=fopen($filbehandler,$filoperasjon); /* åpne */ 

while ($behandlerlinje=fgets($fil)) /* lest en linje fra fil */ 
	{	
		if ($behandlerlinje !="") /* ikke tom linje */ 
		{
			$del=explode(",",$behandlerlinje); /* linjen blir delt opp */ 
			$registrertID=trim($del[0]);
			
			
		if ($registrertID==$sok)
		{
		$behandlerID=trim($del[0]);
			$fornavn=trim($del[1]);
			$etternavn=trim($del[2]);
			$yrkesgruppe=trim($del[3]);
			$bildenr=trim($del[4]);
			$maksAntall=trim($del[5]);
			
			print ("Fornavn: $fornavn <br> Etternavn: $etternavn <br> Yrke: $yrkesgruppe <br> Bilde: $bildenr <br> Maks antall pasienter: $maksAntall<br>");
		}
		
	}
}

fclose($fil); /* lukke */ 
}
/* søker i bilde.txt */ 


if ($lovligbehandler)
{	
$filoperasjon="r";    /* read = lesing */ 
  
$fil2=fopen($filbilde,$filoperasjon); /* åpne */ 

while ($bildelinje=fgets($fil2)) /* lest en linje fra fil */ 
	{	
		if ($bildelinje !="") /* ikke tom linje */ 
		{
			$delbilde=explode(";",$bildelinje); /* linjen blir delt opp */ 
			$bildeID=trim($delbilde[0]);
			
			
		if ($bildeID==$bildenr)
		{
		$bildenummer=trim($delbilde[0]);
			$opDato=trim($delbilde[1]);
			$filNavn=trim($delbilde[2]);
			$beskrivelse=trim($delbilde[3]);
			
			print ("Opplastningsdato: $opDato <br> Filnavn: $filNavn <br> Beskrivelse: $beskrivelse <br>");
		}
		
	}
}

fclose($fil2); /* lukke */ 
}



}
?>	


<?php

include ("slutt.html");
?>