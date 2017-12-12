<?php include("start.html") ?>

<h3>Vis yrkesgrupper</h3>

<?php
	$filnavn="../filer/yrkesgruppe.txt";
	
	$filoperasjon="r";

	$fil=fopen($filnavn, $filoperasjon);
	print("<table>");
	print("<tr><th>Yrkesgrupper</th></tr>");
	
	while ($linje = fgets($fil)) 
	{
		if ($linje!="") 
        {
            $del=explode ("," , $linje);
            
            if ($linje == $linje)
            {
                print("<tr><td> $linje </td></tr>"); 
            }

        }
	}
	print("</table>");
	fclose($fil); /* Lukker fila. */
?>

<?php include("slutt.html") ?>