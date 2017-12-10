

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






?>