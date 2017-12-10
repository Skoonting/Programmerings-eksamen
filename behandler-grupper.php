<?php

include("start.html");

?>

<h2> Vis alle behandlere </h2>



<?php 


/* lese fil */ 

$filnavn="../../filer/behandler.txt";


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
			print("$yrkesgruppe $etternavn $fornavn </br>");

		}	
	}
}	

fclose($fil); /* lukke */ 



?>

<?php

include ("slutt.html");
?>
