function sendword() {
//get Eingaben des Benutzers
  var word  = document.getElementById('word');
  var transword  = document.getElementById('transword');
//  var user = getCookie("username");
var user = "1"
//sende Daten an addWord  function httpGet(theUrl){
var success = gethtml("http://wordshare.kaiseritea.de/server/functions/addWord.php?word=" + word + "&&transword=" + transword + "&&user=" + user);
if (success == "1"){
alert("Danke für dein Word. Es wird nun noch verifiziert.");

} else {
alert("Entweder es gibt dein Wort bereits, oder wir haben Mist gebaut.")

}

function gethtml(theU){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theU, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
  }
    xhttp.open("GET", "../../../../backend/functions/addWord.php", true);
    xhttp.send();
 }
