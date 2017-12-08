<?php

    $filnavn="../../filer/pasient.txt";                                 /* bestemmer fil, i dette tilfellet /filer/student.txt i rot */

    $filoperasjon="r";                                                  /* velger lesning */

    print("<h2>Disse pasientene er registrert.</h2>");

    $fil=fopen($filnavn,$filoperasjon);                                 /* her blir det settet en måte å åpne fil med lesning samtidig */

    while($linje=fgets($fil))                                           /* får tak i filen, åpner og leser den */
      {
           if($linje!="")                                                  /* gjør slik at 'while' gjentar seg helt til linjen er tom */
            {
             $del=explode(";" ,$linje);                            /* deler opp linjene + bruker trim til å få bort unnødvendige mellomrom */
             $pasientnavn=trim($del[0]);
             $pasientid=trim($del[1]);

             print("$pasientnavn - $pasientid<br />");
            }  
     }
    fclose($fil);                                                       /* lukker fil */          
?>