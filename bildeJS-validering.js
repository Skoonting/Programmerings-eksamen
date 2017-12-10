function validateForm(){
        /*
        var bool11 = false;
        var bool12 = false;

        var bildeNummer = document.getElementById("bildeNr").value;

        if(bildeNummer.length > 3){
            document.getElementById("jsOutput").innerHTML = "<br>Bilde nummer er for langt<br>";
            bool11 = false;
        } 
        if(bildeNummer.length < 3){
            document.getElementById("jsOutput").innerHTML = "<br>Bilde nummer er for kort<br>";
            bool11 = false;
        }
        if(bildeNummer.length == 3){
            document.getElementById("jsOutput").innerHTML = "<br>Bilde nummer er riktig<br>";
            bool11 = true;
        }
        */

        /*-------------BildeDato--------------------*/
        
        var oppDato = document.getElementById("opDato").value;
        var oppDatoArray = oppDato.split("-"); //Deler opp og lager en array med de forskjellige veridene mellom "-"

        var oppAr = parseInt(oppDatoArray[0]);
        var oppMa = parseInt(oppDatoArray[1]);
        var oppDa = parseInt(oppDatoArray[2]);
            
        var riktigDatoBool = false;
    
        if(oppDatoArray.length != 3){
            document.getElementById("jsOutput").innerHTML = "Feil formatering av dato"; //sjekker at det er 3 felter
            return false;
        } else {
            
            if(oppAr > 2017 || oppAr < 1800 || oppMa > 12 || oppDatoArray[2].length > 2 || oppDa < 1 || oppDatoArray[2].length < 1
               || oppMa == 1  && oppDa > 31 //Januar
               || oppMa == 2  && oppDa > 28 //Februar
               || oppMa == 3  && oppDa > 31 //Mars
               || oppMa == 4  && oppDa > 30 //April
               || oppMa == 5  && oppDa > 31 //Mai
               || oppMa == 6  && oppDa > 30 //Juni
               || oppMa == 7  && oppDa > 31 //Juli
               || oppMa == 8  && oppDa > 31 //August
               || oppMa == 9  && oppDa > 30 //September
               || oppMa == 10 && oppDa > 31 //Oktober
               || oppMa == 11 && oppDa > 30 //November
               || oppMa == 12 && oppDa > 31 //Desember
              ){
                document.getElementById("jsOutput").innerHTML = "Opplastingsdato stemmer ikke";
                riktigDatoBool = false;
            } else {
                riktigDatoBool = true;
            }
            
            if(riktigDatoBool){
                return true;
            } else {
                return false;
            }
        }

    }