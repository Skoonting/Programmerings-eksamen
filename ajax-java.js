/* onFocus="fokus(this)" onBlur="mistetfokus(this)" onMouseOver="musinn(this)" onMouseOut="musut()" onChange="endretilstorebokstaver(this)" i htmlkode input type. */ 
/* lag på nullstill: onClick='settfokus(document.getElementById("postnr")')
/* lag div id=melding etter form. 
*/ 
function fokus(element)                    /* bruk htmlid til å angi felt */ 
{
	element.style.background="yellow";
}

function mistetfokus(element)
{
	element.style.background="white";
}





function musinn(element)
{
	document.getElementById("melding").style.color="blue";
	
	if(element==document.getElementById("yrkesgruppe"))
	{
		document.getElementById("melding").innerHTML="Fyll inn riktig klassenavn";
	}
	if(element==document.getElementById("bildenr"))
	{
		document.getElementById("melding").innerHTML="Fyll inn klassekode";
	}
	if(element==document.getElementById("fornavn"))
	{
		document.getElementById("melding").innerHTML="Fyll inn fornavn";
	}
	if(element==document.getElementById("etternavn"))
	{
		document.getElementById("melding").innerHTML="Fyll inn etternavn";
	}
	if(element==document.getElementById("brukernavn"))
	{
		document.getElementById("melding").innerHTML="Fyll inn ønsket brukernavn";
	}

}

function musut()
{
	document.getElementById("melding").innerHTML="";
}

function endretilstorebokstaver(element)
{
	element.value=element.value.toUpperCase();
}

function settfokus(element)						/* når man trykker nullstill */ 
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


