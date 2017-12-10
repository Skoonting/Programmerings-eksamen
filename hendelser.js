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
