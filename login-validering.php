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
			$navn=trim($del[0]);
			$id=trim($del[1]);
			
			
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