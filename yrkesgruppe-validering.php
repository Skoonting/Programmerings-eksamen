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
	}
	else
	{
		return $lovligyrkesgruppe;
	}
}

?>