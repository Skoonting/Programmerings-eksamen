<?php

function valideryrkesgruppe($yrkesgruppe) /* Validerer yrkesgruppe */
{

$lovligyrkesgruppe=true;

	if (!$yrkesgruppe)
	{
		$lovligyrkesgruppe=false;
	}
	else if (preg_match('#[^a-z]+$#i', $yrkesgruppe)) /* Bruker funksjonen "preg_match" for å hindre bruk av tall og symboler ved registrering av yrkesgruppe. */
	{
		$lovligyrkesgruppe=false;
		print("Navn på yrkesgrupper kan ikke inneholde sifre eller symboler.");
	}
	
return $lovligyrkesgruppe;
}



/*function validerRegYrkesgruppe($yrkesgruppe)
{

$filyrkesgruppe="../../filer/yrkesgruppe.txt";

$regYrkesgruppe=true;

$filoperasjon="r";

$filyrkesgruppe=fopen($filyrkesgruppe,$filoperasjon);

while ($linje=fgets($filyrkesgruppe))
	{
		if ($linje != "")
		{
			$del=explode(";",$linje);
			$yg=trim($del[0]);
			
			if ($yg != $yrkesgruppe)
			{
				return $regYrkesgruppe;
			}
			else
			{
				$regYrkesgruppe=false;
			}
		}
	}
}
*/
?>