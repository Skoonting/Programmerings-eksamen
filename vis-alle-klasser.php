<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="UTF-8">
    <title>Vis alle klasser</title>  
      <link rel="icon" href="icon.png">
  <link rel="stylesheet" type="text/css" href="styles.css">
      <script>
        
      </script>
  </head>
  <body>
    <div class="container">
      
      <header><h2>Obligatorisk oppgave 2</h2></header>
      
      <nav>
          <ul>
            <li class="titleT" id="tittelId"><strong>Meny</strong></li>
            <li><a href="index.php">Hjem</a></li>
            <li class="titleT"><strong>Klasse</strong></li>
            <li><a href="registrer-klasse.php">Registrer klasse</a></li>
            <li class="active"><a href="#">Vis alle klasser</a></li>
            <li class="titleT"><strong>Student</strong></li>
            <li><a href="registrer-student.php">Registrer student</a></li>
            <li><a href="vis-alle-studenter.php">Vis alle studenter</a></li>
            <li><a href="vis-klasseliste.php">Vis klasseliste</a></li>
          </ul>
      </nav>
        
      <main>
	   <h3>Vis alle klasser</h3>
        <?php
        $filnavn = "klasse.txt";

        $filoperasjon="r";

        $fil = fopen($filnavn, $filoperasjon); 

        echo("<table>");
        echo("<tr><th>Klassekode</th><th>Klassenavn</th></tr>");

          $a = array();
          
        while($linje = fgets ($fil)){
            if($linje != ""){
                $del = explode(";", $linje);
                $kKode = trim($del[0]);
                $kNavn = trim($del[1]);

                array_push($a, array(($kKode), array($kNavn, $kKode)));
            }
        }
        
                /*
                $mat = array(
                    array("Jens", array('verdi1', 'burger', 'ost')),
                    array("Kåre", array('verdi2', 'kjott', 'salat')),
                    array("Magnus", array('verdi3', 'kjott', 'salat')),
                    array("Arne", array('verdi4', 'kjott', 'salat'))
                );
          
                sort($mat);
                sort($a);
                                
                $lengde = count($mat);
                for($i = 0; $i < $lengde; $i++){
                    print("Person: " . $mat[$i][0] . " verdi: " . $mat[$i][1][0]);   
                }
                */
                sort($a);
          
                $lengdeJ = count($a);
                
                
                          
                for($j = 0; $j < $lengdeJ; $j++){
                    $lengdeK = count($a[$j][1]);
                    for($k = 0; $k < $lengdeK; $k++){
                        
                    }
                    print("Yrke: " . $a[$j][0] . "<br>");   
                }
                    
        echo("</table>");
        fclose($fil);
        ?>
          <script>
            
          </script>
        </main>
        <footer><p>&copy; Bjørn Martin</p></footer>
    </div>
  </body>
</html>