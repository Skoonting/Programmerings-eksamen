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
