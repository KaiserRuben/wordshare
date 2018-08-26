function fillGame(){
  //Eingabe vorhanden?
//Ausgabe der vorhandenen Worte

var words = httpGet("http://wordshare.kaiseritea.de/server/functions/fillgame.php");
print("hallo");
console.log(words);
//document.getElementById("txtHint").innerHTML = exwords;

var url = "http://wordshare.kaiseritea.de/server/functions/getWord.php?username=" + getCookie("username") + "&&type=game";
var response = httpGet(url);
var wordsJSON = JSON.parse(response);
console.log(wordsJSON);
document.getElementById('word').innerHTML = wordsJSON[0].word;
document.getElementById('translation').innerHTML = wordsJSON[0].translation;

}

function httpGet(theUrl){
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
  xmlHttp.send( null );
  return xmlHttp.response;
}
