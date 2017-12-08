function fjernMelding()

{
   document.getElementById("melding").innerHTML="";
}

function validerbilde(bilde)
{
var tegn1, tegn2, tegn3;
var lovligbilde=true;

if (!bilde)
  {
    lovligbilde=false;
  }
else if (bilde.length!=3)
  {
    lovligbilde=false;
  }
else
  {
    tegn1=bilde.substr(0,1);
    tegn2=bilde.substr(1,1);
    tegn3=bilde.substr(2,1);

    if (tegn1 < "0" || tegn1 > "9" || tegn2 < "0" || tegn2 > "9" || tegn3 < "1" || tegn3 > "9") 
      {
        lovligbilde=false;
      }
  }

  return lovligbilde;
}

function validerRegistrerBilde()
{
var bilde=document.getElementById("bilde").value;

  var lovligbilde=validerbilde(bilde);

  var feilmelding="";
if (!lovligbilde)
    {
        feilmelding=feilmelding + "bilde er ikke korrekt fylt ut <br />";
    }

  if (lovligbilde)
    {
        return true;
    }
    else
      {
        document.getElementById("melding").style.color="red";
        document.getElementById("melding").innerHTML=feilmelding;
          return false;
      }
  }
