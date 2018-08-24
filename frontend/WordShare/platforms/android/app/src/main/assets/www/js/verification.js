
//Username wird als Cookie gespeiert
setCookie("username", username);

function validate(){
  var username = document.getElementById("uname").value;
  var val = document.getElementById("").value;
  var word = document.getElementById("").value;

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









  datenSammeln();

  function datenSammeln(){

    if(checkCookie("username")&&checkCookie("password")){

      var username = getCookie("username");
      var pw = getCookie("password");

    anmelden(username, password);

    }
    else{

      var username = document.getElementById("name").value;
      var pw = document.getElementById("pw").value;

      if(pw!=""&&username!=""){
        anmelden(username, password);
      }

    }
  }


  function anmelden(username, password){

    //Username wird als Cookie gespeiert
    setCookie("username", username);

    var url = "http://wordshare.kaiseritea.de/server/functions/login.php?name=" + username + "&&pw=" + pw;
    var success = httpGet(url);
    console.log(success);

    if(document.getElementById("check").checked == true){
      setCookie("password", pw);
    }

    if(success == "1"){
      location="https://www.bing.de";
    }
    else{
      alert("Wrong Password or Username!");
    }
  }
