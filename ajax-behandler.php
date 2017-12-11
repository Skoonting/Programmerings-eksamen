<?php /* søker i klasseliste ajax */ 

$filnavn="../filer/behandler.txt";

$yrkesgruppe=$_GET ["yrkesgruppe"];

print ("<table border=0>");

$filoperasjon="r";

$fil=fopen($filnavn,$filoperasjon);

while ($linje=fgets($fil)) 
	{
	if ($linje != "")
		{
			$del=explode(",",$linje);
			$behandlerID=trim($del[0]);
			$fornavn=trim($del[1]);
			$etternavn=trim($del[2]);
			$ygruppe=trim($del[3]);
			$bildenr=trim($del[4]);
			$maksAntall=trim($del[5]);
			
			$startpos4=stripos($ygruppe,$yrkesgruppe);
			
			if ($startpos4!==false)
				{
					print ("<tr> <td> $etternavn $fornavn </td> </tr> <br>");
				}
		}
	}		

fclose ($fil);
print ("</table>")



?>