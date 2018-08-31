function click(){
var clickedfield = document.getElementById("clicked");

if (clickedfield = 0){
  this.getElementById("").setID = "clicked";
} else (){
clickedword = document.getElementById("clicked").innerHTML;

clickedword = document.getElementById("clicked").color = "";

console.dir(this);
}

}

function fillGame(){
//Ausgabe der vorhandenen Worte
var url = "http://wordshare.kaiseritea.de/server/functions/getWord.php?username=" + getCookie("username") + "&&type=game";
var response = httpGet(url);
var wordsJSON = JSON.parse(response);
console.log(wordsJSON);
//document.getElementById('word').innerHTML = wordsJSON[0].word;
//document.getElementById('translation').innerHTML = wordsJSON[0].translation;

document.getElementById("box1").innerHTML = wordsJSON[2].word;
document.getElementById("box1").setAttribute("word", wordsJSON[2].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[2].translation);

document.getElementById("box2").innerHTML = wordsJSON[1].translation;
document.getElementById("box1").setAttribute("word", wordsJSON[1].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[1].translation);

document.getElementById("box3").innerHTML = wordsJSON[5].word;
document.getElementById("box1").setAttribute("word", wordsJSON[5].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[5].translation);

document.getElementById("box4").innerHTML = wordsJSON[0].translation;
document.getElementById("box1").setAttribute("word", wordsJSON[0].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[0].translation);

document.getElementById("box5").innerHTML = wordsJSON[3].word;
document.getElementById("box1").setAttribute("word", wordsJSON[2].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[2].translation);

document.getElementById("box6").innerHTML = wordsJSON[4].translation;
document.getElementById("box1").setAttribute("word", wordsJSON[2].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[2].translation);

document.getElementById("box7").innerHTML = wordsJSON[1].word;
document.getElementById("box1").setAttribute("word", wordsJSON[1].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[1].translation);

document.getElementById("box8").innerHTML = wordsJSON[0].word;
document.getElementById("box1").setAttribute("word", wordsJSON[0].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[0].translation);

document.getElementById("box9").innerHTML = wordsJSON[5].translation;
document.getElementById("box1").setAttribute("word", wordsJSON[5].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[5].translation);

document.getElementById("box10").innerHTML = wordsJSON[2].translation;
document.getElementById("box1").setAttribute("word", wordsJSON[2].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[2].translation);

document.getElementById("box11").innerHTML = wordsJSON[3].translation;
document.getElementById("box1").setAttribute("word", wordsJSON[3].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[3].translation);

document.getElementById("box12").innerHTML = wordsJSON[4].word;
document.getElementById("box1").setAttribute("word", wordsJSON[4].word);
document.getElementById("box1").setAttribute("translation", wordsJSON[4].translation);
}


function httpGet(theUrl){
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
  xmlHttp.send( null );
  return xmlHttp.response;
}
