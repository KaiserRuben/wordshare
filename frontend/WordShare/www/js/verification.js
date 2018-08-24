

function registrieren(){
  var username = document.getElementById("uname").value;

  var url = "http://wordshare.kaiseritea.de/server/functions/register.php?username=" + username + "&&validation=" + val + "&&word=" + word;

  if (username!='' && val!='' && word!=''){
      console.log(url);
      var success = httpGet(url);
      console.log(success);
      if(success == "1"){
        alert("Erfolg!")
      }
      else{
        alert("Nein. Einfach nur nein.");
      }
    }
    else{
      alert("Nope");
    }
  }

 function httpGet(theUrl){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
  }
