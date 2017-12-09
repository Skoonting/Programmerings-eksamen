function fjernMelding()
{
   document.getElementById("javamelding").innerHTML="";
}
function vis(yrkesgruppe)
{
  var foresporsel=new XMLHttpRequest();

  foresporsel.onreadystatechange=function()
    {
      if (foresporsel.readyState==4 && foresporsel.status==200)
        {
          document.getElementById("javamelding").innerHTML=foresporsel.responseText;
        }
    }

  foresporsel.open("GET","behandler-ajax.php?yrkesgruppe="+yrkesgruppe);
  foresporsel.send();
}
