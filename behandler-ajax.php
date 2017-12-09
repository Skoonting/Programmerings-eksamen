<?php
  $filnavn="behandler.txt";

  $dbehandler=$_GET["yrkesgruppe"];
  print ("<table border=0>");

  /* lese fil */

   $filoperasjon="r";    /* read = lesing */

   $fil=fopen($filnavn,$filoperasjon);  /* åpne */

   while ($behandlerlinje=fgets($fil)) /* fgets leser frem til linjeskift  */
          {
		        if ($behandlerlinje!= "")            /*sjekker at linje ikke er tom */

	 {
	      $del=explode(",",$behandlerlinje);
	      $behandlerID=trim($del[0]);
		    $fornavn=trim($del[1]);
		    $etternavn=trim($del[2]);
	      $yrkesgruppe=trim($del[3]);
	      $bildenr=trim($del[4]);
	      $maksAntall=trim($del[5]);

        $startpos=stripos($yrkesgruppe,$dbehandler);
        if($startpos!==false)
         {
		    print("$etternavn $fornavn : $yrkesgruppe </br>");
			}
	}
}
fclose($fil); /* lukke */

  print ("</table>");
?>
