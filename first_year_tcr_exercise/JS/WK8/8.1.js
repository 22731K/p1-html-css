function Plus(){
    var getal1=parseInt(document.getElementById('getal1').value);
    var getal2=parseInt(document.getElementById('getal2').value);
    var antwoord=getal1+getal2;
   document.getElementById("antwoord").innerHTML=antwoord;
}
function Min(){
    var getal1=document.getElementById('getal1').value;
    var getal2=document.getElementById('getal2').value;
    var antwoord=getal1-getal2
   alert(antwoord)
}
function Keer(){
    var getal1=document.getElementById('getal1').value;
    var getal2=document.getElementById('getal2').value;
    var antwoord=getal1*getal2
   alert(antwoord)
}
function Delen(){
    var getal1=document.getElementById('getal1').value;
    var getal2=document.getElementById('getal2').value;
    var antwoord=getal1/getal2
   alert(antwoord)
}