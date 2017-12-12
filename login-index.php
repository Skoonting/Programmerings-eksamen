<?php
include("login-start.html");
?>

<h2>Logg inn med pasientID</h2>

<h3> Fyll inn pasientID</h3>
	<form method="post" action="login-index.php" id="regbehandler" name="regbehandler" onSubmit="">
        Pasient-id <input type="text" id="pasientID" name="pasientID" onFocus="fokus(this)" onBlur="mistetFokus(this)" onMouseOver="musInn(this)" onMouseOut="musUt()" onChange="endreTilStoreBokstaver(this)" required/> <br /> <br />
		<input type="submit" value="Fortsett" id="fortsett" name="fortsett" /> 
		<input type="reset" value="Nullstill feltene" id="nullstill" name="nullstill" onClick="fjernmelding()"/>
	</form>
	
	
<div id="melding"></div>
<br>
<div id="javavalidering"></div>
<br>

<div id="javamelding"></div>


<?php

  if (isset($_POST ["fortsett"])) /* PHP-koden vil kunne aktivere dersom 'Fortsett' er trykt */
                {
                    $filnavn="../filer/pasient.txt";    
                
                   include("login-validering.php"); 

                                    
                  
                
                    $pasientID=$_POST["pasientID"];
                    $pasientID=trim($pasientID);
                    $pasientID=strtoupper($pasientID);
					
					$lovliglogin=lovliglogin($pasientID);
					
					
                  
                    if (!$pasientID) /* Vis pasient-id ikke er riktig tastet inn. Pasient-id skal ha 2-3 tegn, og kan ikke bestå av tall */
                        {
                            print ("Pasient-id er ikke blitt riktig tastet inn. Pasient-id må bestå av 2-3 bokstaver. <br />");
                        }
                
				
					if (!$lovliglogin)
					{
						print ("Angitt pasientID finnes ikke");
					}


                    if ($pasientID && $lovliglogin) /* hVis validasjon er riktig */
                        {
                            
						print ("<script type='text/javascript'>window.location = 'https://home.hbv.no/web-prg1-2017-09/nettsted/index.php';</script>");      
							
							
							
							
                        }
                 }








?>


<?php
include("slutt.html");
?>
