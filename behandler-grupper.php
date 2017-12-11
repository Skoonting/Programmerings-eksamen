<?php

include("start.html");

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
		
		if($linje==$linje)
		{
			print("");

		}	
	}
}	

fclose($fil); /* lukke */ 


$filnavn2="../../filer/yrkesgruppe.txt";


$filoperasjon="r";    /* read = lesing */ 

$fil2=fopen($filnavn2,$filoperasjon);  /* åpne */ 

while ($linje2=fgets($fil2)) /* fgets leser frem til linjeskift  */
{
		if ($linje2!="")            /*sjekker at linje ikke er tom */ 
	 		
	{
		$del2=explode(",",$linje2);
		$yrkesgruppe=trim($del2[0]);
		
		
		if($linje2==$linje2)
		{
			print("$yrkesgruppe $etternavn $fornavn </br>");

		}	
	}
}	

fclose($fil); /* lukke */ 






?>

<?php

include ("slutt.html");
?>
