<?php 

function validerbildenr($bildenr) 

/* validerer bildenr */ 

{
$lovligbildenr=true;

if (!$bildenr) /* sjekker at fylt ut */ 
	{
		$lovligbildenr=false;
	}	

else if (strlen($bildenr)!=3)  /* false hvis ikke 3 tegn */ 
	{
		$lovligbildenr=false;
	}

else if (!is_numeric($bildenr))  /* false hvis ikke sifre */ 
	{
		$lovligbildenr=false;
	}

return $lovligbildenr;

}	




function validermaksantall($maksAntall)
{

$lovligmaksantall=true;

if (!$maksAntall) 
	{	
		$lovligmaksantall=false;
	}

else if (!is_numeric($maksAntall))
	{	
		$lovligmaksantall=false;
	}	

else 
	{
		$tegn1=substr($maksAntall,0,1); /* første tegn i antall pasienter */ 
		
		if ($tegn1 < "1")
		{
			$lovligmaksantall=false;
		}
	}

return $lovligmaksantall; 
}


/* Sjekker at bilde er registrert i bilde.txt */ 

function validerRegbilde($bildenr)
{

$filbilde="../../filer/bilde.txt";

$regbilde=true; 

$filoperasjonbilde="r"; 

$bildefil=fopen($filbilde,$filoperasjonbilde);

while ($linje=fgets($bildefil)) 
	{
		if ($linje != "") 
		{
			$del=explode(";",$linje);
			$bildenummer=trim($del[0]);
			$opDato=trim($del[1]);
			$filNavn=trim($del[2]);
			$beskrivelse=trim($del[3]);
			
			if ($bildenummer==$bildenr) 
				{
					return $regbilde;
				}
				
			else 
				{		
				print (""); 
				}
		}
	}
}

function validerbehandlerid($behandlerID)

{

$filbehandler="../../filer/behandler.txt";

$regID=true; 

$filoperasjonbehandler="r"; 

$filbehandler=fopen($filbehandler,$filoperasjonbehandler);

while ($linje=fgets($filbehandler)) 
	{
		if ($linje != "") 
		{
			$del=explode(",",$linje);
			$beID=trim($del[0]);
			$fornavn=trim($del[1]);
			$etternavn=trim($del[2]);
			$yrkesgruppe=trim($del[3]);
			$bildenr=trim($del[4]);
			$maksAntall=trim($del[5]);
			
			if ($beID != $behandlerID) 
				{
					return $regID;
				}
				
			else 
				{		
					$regID=false;	
					
				
				}
		}
	}
}


function valideryrkesgruppe($yrkesgruppe) /* sjekker at yrkesgruppe er registrert i txt */ 
{

$filyrkesgruppe="../../filer/yrkesgruppe.txt";

$lovligyrkesgruppe=true; 

$filoperasjonyrke="r"; 

$filyrkesgruppe=fopen($filyrkesgruppe,$filoperasjonyrke);

while ($linje=fgets($filyrkesgruppe)) 
	{
		if ($linje != "") 
		{
			$del=explode(";",$linje);
			$yrke=trim($del[0]);
			
			
			if ($yrke==$yrkesgruppe) 
				{
					return $lovligyrkesgruppe;
				}
				
			else 
				{		
					$lovligyrkesgruppe=false;
				}
		}
	}
}


?>	