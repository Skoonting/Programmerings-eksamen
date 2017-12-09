

<?php

    function validerpasientnavn($pasientnavn)
    {
        $riktigpasientnavn=true;
        
        if (!$pasientnavn)
        {
            $riktigpasientnavn=false;
        }
        else if (is_numeric($pasientnavn))
        {
            $riktigpasientnavn=false;
        }
        return $riktigpasientnavn;
    }

    function validerpasientid($pasientid)
    {

        $riktigpasientid=true;

        if (!$pasientid)
            {
               $riktigpasientid=false;
            }
        else if (strlen($pasientid)!=2 && strlen($pasientid)!=3)
            {
               $riktigpasientid=false;
            }

        else if (is_numeric($pasientid))
            {
                $riktigpasientid=false;
            }
        return $riktigpasientid;
    }


    function validerunik($pasientid)
        {

        
        
        $filnavn="../../filer/pasient.txt";

        $unikpasientID=true; 

        $filoperasjon="r"; 

        $fil=fopen($filnavn,$filoperasjon);

        while ($linje=fgets($fil)) 
            {
                if ($linje != "") 
                {
                    $del=explode(";",$linje);
                    $pasientnavn=trim($del[0]);
                    $idtilpasient=trim($del[1]);

                    
                    
                    if ($pasientid!=$idtilpasient) 
                        {
                            return $unikpasientID;
                        }
		            
                    else
                        {
                            $unikpasientID=false;
                          

                        }

                        
                }
            }
        }
?>