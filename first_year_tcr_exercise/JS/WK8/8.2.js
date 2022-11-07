function Plus(){
    var getal1=parseInt(document.getElementById('getal1').value);
    var getal2=parseInt(document.getElementById('getal2').value);
    var antwoord=getal1+getal2;
    document.getElementById("antwoord").innerHTML=antwoord;
 if  (antwoord < 1) {
    document.getElementById("antwoord").innerHTML = "Het getal is te laag"
   }
}
function Min(){
    var getal1=document.getElementById('getal1').value;
    var getal2=document.getElementById('getal2').value;
    var antwoord=getal1-getal2
   document.getElementById("antwoord").innerHTML=antwoord;
   if  (antwoord < 1) {
    document.getElementById("antwoord").innerHTML = "Het getal is te laag"
   }
}
function Keer(){
    var getal1=document.getElementById('getal1').value;
    var getal2=document.getElementById('getal2').value;
    var antwoord=getal1*getal2
    document.getElementById("antwoord").innerHTML=antwoord;
    if  (antwoord < 1) {
        document.getElementById("antwoord").innerHTML = "Het getal is te laag"
       }
}
function Delen(){
    var getal1=document.getElementById('getal1').value;
    var getal2=document.getElementById('getal2').value;
    var antwoord=getal1/getal2
    document.getElementById("antwoord").innerHTML=antwoord;
    if  (antwoord < 1) {
        document.getElementById("antwoord").innerHTML = "Het getal is te laag"
       }
}