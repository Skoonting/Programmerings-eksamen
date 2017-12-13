function fokus(element) /* denne funksjonen gjør at boksen blir gul når den får fokus */
{
  element.style.background="yellow";
}


function mistetFokus(element) /* denne funksjonen gjør at når boksen mister fokus vil den bli hvit igjen */
{
  element.style.background="white";
}

function musInn(element)
{
  document.getElementById("melding").style.color="blue"; /* setter meldings fargen til blå */
/* */
  if (element==document.getElementById("---")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="---"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
/* */
  if (element==document.getElementById("---")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="---"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  /* kopier for flere bokser siden jeg ikke helt veit hvor mange som skal være med */
  
/* BEHANDLER PHP */ 
  if (element==document.getElementById("behandlerID")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn behandlerID"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
    if (element==document.getElementById("fornavn")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn fornavn"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
    if (element==document.getElementById("etternavn")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn etternavn"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
    if (element==document.getElementById("yrkesgruppe")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn yrkesgruppe"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
    if (element==document.getElementById("bildenr")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn bildenummer (3 sifre)"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
    if (element==document.getElementById("maksAntall")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn maks antall pasienter"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
    if (element==document.getElementById("sok")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn søkeord"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
  /* BILDEREGISTRERING  - Bildenr får samme mld som ovenfor */ 
  
  
    if (element==document.getElementById("opDato")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn opplastningsdato (ÅÅÅÅ-MM-DD)"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
    if (element==document.getElementById("filNavn")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn filnavn"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
    if (element==document.getElementById("beskrivelse")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn beskrivelse av bilde"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
  /* PASIENT */ 
  
    if (element==document.getElementById("pasientnavn")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn pasientnavn"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
    if (element==document.getElementById("pasientID")) /* bytt ut --- med id på element (tekstboks) */
    {
      document.getElementById("melding").innerHTML="Fyll inn pasientID (2-3 bokstaver)"; /* bytt ut --- med teksten som skal komme opp med info om hva som skal inn i boksen (f.eks: posntr skal bestå av fire siffre) */
    }
  
  /* YRKESGRUPPE - BRUKER SAMME ID SOM PÅ BEHANDLER */ 
  

  
  
  
}

function musUt() /*fjærner meldingen når man tar musa ut av feltet/boksen */
{
  document.getElementById("melding").innerHTML="";
}


function endreTilStoreBokstaver(element) /*endrer alle bokstavene til store bokstaver */
{
  element.value=element.value.toUpperCase();
}


function settFokus(element) 
{
  element.focus();
}


/* AJAX */ 


function fjernMelding()
{
  document.getElementById("javamelding").innerHTML="";   
}  


function vis(yrkesgruppe)
{
  var foresporsel=new XMLHttpRequest();  /* oppretter request-objekt */
  
  foresporsel.onreadystatechange=function() 
    {
      if (foresporsel.readyState==4 && foresporsel.status==200)  /* responsen er fullført og vellykket */
        {
          document.getElementById("javamelding").innerHTML=foresporsel.responseText;  /* responsteksten legges i meldingsfeltet */
        }
    }

  foresporsel.open("GET","ajax-behandler.php?yrkesgruppe="+yrkesgruppe);  /* angir metode og URL */
  foresporsel.send();  /* sender en request */
}


/* slutt ajax */ 


/* rød feilmld */ 

function lovligbilde()
{
var bildenr=document.getElementById("bildenr").value	

var lovligbildenr=true;

var feilmelding="";

if (!bildenr)
	{
	feilmelding="Bildenr er ikke fylt ut <br>"; 
	lovligbildenr=false;
	}

if (bildenr.length!=3)	
	{
	feilmelding=feilmelding + "Bildenr må bestå av 3 sifre <br>";
	lovligbildenr=false;	
	}

if (isNaN(bildenr))	
	{
	feilmelding=feilmelding + "bildenr kan kun bestå av sifre <br>";
	lovligbildenr=false;
	}

if (lovligbildenr) 
	{	
		return true;
	}
else 
	{	
		document.getElementById("javamelding").style.color="red";
		document.getElementById("javamelding").innerHTML=feilmelding;
		return false;
	}
}	


/* DATOVALIDERING */ 


function validateForm(){
    var oppDato = document.getElementById("opDato").value;
    var oppDatoArray = oppDato.split("-"); //Deler opp og lager en array med de forskjellige veridene mellom "-"

    var oppAr = parseInt(oppDatoArray[0]);
    var oppMa = parseInt(oppDatoArray[1]);
    var oppDa = parseInt(oppDatoArray[2]);

    var riktigDatoBool = true;

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






























