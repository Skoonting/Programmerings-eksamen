<?php

include("start.html");


/* 


$sortert=array("$yrkesgruppe");
		sort($sortert);
			
		$clength = count($sortert);
		for($x = 0; $x < $clength; $x++) {
			
		print ("$sortert[$x],$fornavn,$etternavn");
			}


*/ 
?>

<h2> Vis alle behandlere </h2>



<?php 


/* lese fil */ 

$filnavn="../filer/behandler.txt";


$filoperasjon="r";    /* read = lesing */ 

$fil=fopen($filnavn,$filoperasjon);  /* åpne */ 

while ($linje=fgets($fil)) /* fgets leser frem til linjeskift  */
{
		if ($linje!="")            /*sjekker at linje ikke er tom */ 
	 		
	{
		$del=explode(",",$linje);
		$behandlerID=trim($del[0]);
		$fornavn=trim($del[1]);
		$etternavn=trim($del[2]);
		$yrkesgruppe=trim($del[3]);
		$bildenr=trim($del[4]);
		$maksAntall=trim($del[5]);
		
		$sortert=array("$yrkesgruppe");     /* legger inn i array */ 
		sort($sortert);	                    /* sorterer alfabetisk */ 

		$clength = count($sortert);
		for($yrkesgruppe = 0; $yrkesgruppe < $clength; $yrkesgruppe++) 
		{
			
		print ("$sortert[$yrkesgruppe] $fornavn $etternavn <br>");
	
		
		}
		
		
	}	
	



}



fclose($fil);	
?>

<?php

include ("slutt.html");
?>

