<?php

include("start.html");

?>



<h2> Vis alle behandlere </h2>



<?php 


/* lese fil */ 

$filnavn2="../filer/behandler.txt";


$filoperasjon="r";    /* read = lesing */ 

$fil2=fopen($filnavn2,$filoperasjon);  /* åpne */ 

while ($linje2=fgets($fil2)) /* fgets leser frem til linjeskift  */
{
		if ($linje2!="")            /*sjekker at linje ikke er tom */ 
	 		
	{
		$del2=explode(",",$linje2);
		$behandlerID=trim($del2[0]);
		$fornavn=trim($del2[1]);
		$etternavn=trim($del2[2]);
		$yrkesgruppe=trim($del2[3]);
		$bildenr=trim($del2[4]);
		$maksAntall=trim($del2[5]);
		
		print ("<script type='text/javascript' src='sortere.js'></script>");
		print ("  <div id='outPut'></div>");
		
	}	
}
fclose($fil2);	












?>

<?php

include ("slutt.html");
?>

