

function newword(mode){

  document.getElementById('mywords').innerHTML ="loading...";
  document.getElementById('translation').innerHTML ="";
  if (mode == "0") {
    var url = "http://wordshare.kaiseritea.de/server/functions/getWord.php?mode=0&&username=" + getCookie("username") + "&&type=verification";
  }else{
    var url = "http://wordshare.kaiseritea.de/server/functions/getWord.php?mode=1&&username=" + getCookie("username") + "&&type=verification";
  }
  var response = httpGet(url);
  var wordsJSON = JSON.parse(response);

  document.getElementById('mywords').innerHTML = wordsJSON[0].word;
  document.getElementById('translation').innerHTML = wordsJSON[0].translation;

  setCookie("tempword", wordsJSON[0].word);

}

function httpGet(theUrl){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}


function verify(val){

    var username = getCookie("username");     //geht das so?
    // var word = document.getElementById("word").value;
    var word = getCookie('tempword')    //woher kommt das?

    var url = "http://wordshare.kaiseritea.de/server/functions/word-verification.php?username=" + username + "&&validation=" + val + "&&word=" + word;

    if (username!='' && word!=''){
        console.log(url);
        var success = httpGet(url);
        console.log(success);
        if(success == "1"){
          newword();
        }
        else{
          alert("Nein. Einfach nur nein.");
        }
    }
    else{
        alert("Nope");
    }
  }


  function setCookie(cname, cvalue) {
    window.localStorage.setItem(cname, cvalue);
  }

  function getCookie(cname) {
    return(window.localStorage.getItem(cname));

  }

  function checkCookie(cname) {
    var cookie = window.localStorage.getItem(cname);
    if (cookie != "" && cookie != null) {

      return true;

    } else {

      return false;

    }
  }
