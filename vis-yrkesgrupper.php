<?php /* Vis yrkesgrupper */

include("start.html");

?>


<?php

	$filnavn="../../filer/yrkesgruppe.txt";

	
	
	$filoperasjon="r";
	print("Følgende yrkesgrupper er registrert: <br /> <br /> <ul>");

	$fil=fopen($filnavn, $filoperasjon); 

	while ($linje = fgets($fil)) 
	{
		if ($linje!="") 
        {
            $del=explode ("," , $linje);
            
            if ($linje == $linje)
            {
                print("<li> $linje </li> </br>"); 
            }

        }
	}
	print("</ul>");
	fclose($fil); /* Lukker fila. */

?>


<?php

include("slutt.html");

?>