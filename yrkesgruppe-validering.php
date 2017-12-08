<?php

function validerYrkesgruppe($yrkesgruppe) /* Validerer yrkesgruppe */
{

$lovligYrkesgruppe=true;

	if (!$yrkesgruppe)
	{
		$lovligYrkesgruppe=false;
	}
	else if (preg_match('#[^a-z]+$#i', $yrkesgruppe)) /* Bruker funksjonen "preg_match" for å hindre bruk av tall og symboler ved registrering av yrkesgruppe. */
	{
		$lovligYrkesgruppe=false;
	}
	
return $lovligYrkesgruppe;
}



function validerRegYrkesgruppe($yrkesgruppe)
{

$filyrkesgruppe="../../filer/yrkesgruppe.txt";

$regYrkesgruppe=true;

$filoperasjon="r";

$yrkesgruppefil=fopen($filyrkesgruppe,$filoperasjon);

while ($linje=fgets($yrkesgruppefil))
	{
		if ($linje != "")
		{
			$del=explode(";",$linje);
			$yrkesgruppe2=trim($del[0]);
			
			if ($yrkesgruppe2==$yrkesgruppe)
			{
				return $regYrkesgruppe;
			}
			else
			{
				print("Yrkesgruppen er ikke registrert <br>");
			}
		}
	}
}

?>