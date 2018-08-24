

function registrieren(){
  var username = document.getElementById("uname").value;

  var url = "http://wordshare.kaiseritea.de/server/functions/register.php?username=" + username + "&&name=" + fname + "&&lastname=" + lname + "&&mail=" + mail + "&&age=" + age + "&&mt=" + mt + "&&nl=" + nl + "&&pw=" + pw + "&&homecity=" + city;

  if (username!='' && fname!='' && lname!='' && age!='' && city!='' && mail!='' && pw!='' && mt!='' && nl!=''){
      console.log(url);
      console.log("." + pw + "..");
      var success = httpGet(url);
      console.log(success);
      if(success == "1"){
        location="/daily-word.html";
      }
      else{
        alert("Die Registrierung war leider nicht erfolgreich. Bitte versuchen sie es erneut.");
      }
    }
    else{
      alert("Die Registrierung war leider nicht erfolgreich. Bitte versuchen sie es erneut.");
    }
  }

 function httpGet(theUrl){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
  }
