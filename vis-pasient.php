<?php
    $filnavn="../../filer/pasient.txt";                                 

    $filoperasjon="r";                                                 

    print("<h2>Disse pasientene er registrert.</h2>");

    $fil=fopen($filnavn,$filoperasjon);                                 

    while($linje=fgets($fil))                                           
      {
           if($linje!="")                                                  
            {
             $del=explode(";" ,$linje);                            
             $pasientnavn=trim($del[0]);
             $pasientid=trim($del[1]);

             print("$pasientid - $pasientnavn<br />");
            }  
     }

    fclose($fil);                                                          
?>