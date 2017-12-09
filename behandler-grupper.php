<?php

include("start.html");

?>

<h2> Vis alle behandlere </h2>



<?php 


/* lese fil */ 

$filnavn1="../../filer/yrkesgruppe.txt";
$filnavn2="../../filer/behandler.txt";

$filoperasjon="r";    /* read = lesing */ 





$fil1=fopen($filnavn1,$filoperasjon);  /* åpne */ 


while ($linje1=fgets($fil1)) /* fgets leser frem til linjeskift  */
{
		if ($linje1!="")            /*sjekker at linje ikke er tom */ 
	 		
	{
		$del=explode(";",$linje1);
		$yrke=trim($delY[0]);
			
	}
}	
  

$fil=fopen($filnavn2,$filoperasjon); /* åpne */ 

while ($linje2=fgets($fil)) /* lest en linje fra fil */ 
	{	
		if ($linje2 !="") /* ikke tom linje */ 
		{
			$delB=explode(",",$linje2); /* linjen blir delt opp */ 
			$yrkeG=trim($del[3]);
			
			
		if ($yrke==$yrkeG)
		{
		$behandlerID=trim($del[0]);
			$fornavn=trim($del[1]);
			$etternavn=trim($del[2]);
			$yrkesgruppe=trim($del[3]);
			$bildenr=trim($del[4]);
			$maksAntall=trim($del[5]);
			
			print ("$yrke $fornavn $etternavn <br>");
		}
		
	}
}
fclose($fil1); /* lukke */ 
fclose($fil); /* lukke */ 


?>

<?php

include ("slutt.html");
?>