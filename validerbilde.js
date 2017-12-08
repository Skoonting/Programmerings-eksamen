function validerBilde(bilde)
{

var tegn1, tegn2, tegn3;
var lovligBilde=true;

if (!bilde)  /* feltet for bilde er ikke bylt ut */
  {
    lovligKlassekode=false;
  }
else if (bilde.length!=3)  /* bilde består ikke av 3 tegn */
  {
    lovligBilde=false;
  }
else
  {
    tegn1=bilde.substr(0,1);  /* første tegn i bilde */
    tegn2=bilde.substr(1,1);  /* andre tegn i bilde */
    tegn3=bilde.substr(2,1);  /* tredje tegn i bilde */

    if (tegn1 < "0" || tegn1 > "9" || tegn2 < "0" || tegn2 > "9" || tegn3 < "1" || tegn3 > "9")  /* minst ett av tegnene er ulovlig */
      {
        lovligBilde=false;
      }
  }

  return lovligBilde;
}

function validerRegistrerBilde()
{

  var bilde=document.getElementById("bilde").value;

  var lovligBilde=validerBilde(bilde);  /* valideringsfunksjon utført */

  var feilmelding="";

  if (!lovligBilde)  /* bilde er ikke korrekt fylt ut */
    {
        feilmelding=feilmelding + "Bilde er ikke korrekt fylt ut <br />";
    }

  else
    {
        document.getElementById("melding").style.color="red";
        document.getElementById("melding").innerHTML=feilmelding;
        return false;
    }
}
