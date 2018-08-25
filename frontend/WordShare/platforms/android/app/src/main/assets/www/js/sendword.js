function sendword() {
//get Eingaben des Benutzers
  var word  = document.getElementById('word');
  var transword  = document.getElementById('transword');
//  var user = getCookie("username");
var user = "1"
//sende Daten an addWord  function httpGet(theUrl){
var success = gethtml("http://wordshare.kaiseritea.de/server/functions/addWord.php?word=" + word + "&&transword=" + transword + "&&user=" + user);
console.log(success);
if (success == "1"){
  prompt("Thanks for your word, it will be varifyed soon.");


} else {
  prompt("Your word is not new.");


}
}

function gethtml(theU){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theU, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
  }
