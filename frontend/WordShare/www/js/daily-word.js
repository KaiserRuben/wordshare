
// When the user clicks on <div>, open the popup
function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
  }


  var url = "http://wordshare.kaiseritea.de/server/functions/getWord.php?username=" + getCookie("username") + "&&type=word";
  var response = httpGet(url);
  var wordsJSON = JSON.parse(response);

  console.log(wordsJSON);

  document.getElementById('word').innerHTML = wordsJSON[0].word;
  document.getElementById('translation').innerHTML = wordsJSON[0].translation;

  function httpGet(theUrl){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
  }
