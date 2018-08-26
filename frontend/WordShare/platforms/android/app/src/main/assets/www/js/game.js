function fillGame(){
  //Eingabe vorhanden?
//Ausgabe der vorhandenen Worte
var url = "http://wordshare.kaiseritea.de/server/functions/getWord.php?username=" + getCookie("username") + "&&type=game";
var response = httpGet(url);
var wordsJSON = JSON.parse(response);
console.log(wordsJSON);
//document.getElementById('word').innerHTML = wordsJSON[0].word;
//document.getElementById('translation').innerHTML = wordsJSON[0].translation;


document.getElementById("box1").innerHTML = wordsJSON[2].word;
document.getElementById("box2").innerHTML = wordsJSON[1].translation;
document.getElementById("box3").innerHTML = wordsJSON[5].word;
document.getElementById("box4").innerHTML = wordsJSON[0].translation;
document.getElementById("box5").innerHTML = wordsJSON[3].word;
document.getElementById("box6").innerHTML = wordsJSON[4].translation;
document.getElementById("box7").innerHTML = wordsJSON[1].word;
document.getElementById("box8").innerHTML = wordsJSON[0].word;
document.getElementById("box9").innerHTML = wordsJSON[5].translation;
document.getElementById("box10").innerHTML = wordsJSON[2].translation;
document.getElementById("box11").innerHTML = wordsJSON[3].translation;
document.getElementById("box12").innerHTML = wordsJSON[4].word;


}


function httpGet(theUrl){
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
  xmlHttp.send( null );
  return xmlHttp.response;
}
