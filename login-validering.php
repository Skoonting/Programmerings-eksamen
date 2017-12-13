<?php


function lovliglogin($pasientID)
{

$filnavn="../filer/pasient.txt";

$lovliglogin=true; 

$filoperasjon="r"; 

$fil=fopen($filnavn,$filoperasjon);

while ($linje=fgets($fil)) 
	{
		if ($linje != "") 
		{
			$del=explode(";",$linje);
			$fornavn=trim($del[0]);
			$etternavn=trim($del[0]);
			$id=trim($del[2]);
			
			
			if ($pasientID==$id) 
				{
					
					
					$lovliglogin=true;
					return $lovliglogin;	
				}
				
			else 
				{		
					$lovliglogin=false;
					
				}
				
		}
	}

fclose($fil);	
}


?>