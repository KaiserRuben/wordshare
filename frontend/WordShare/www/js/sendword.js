function sendword() {
//get Eingaben des Benutzers
  var word  = document.getElementById('word');
  var transword  = document.getElementById('translation');
  var w_code = "EN";
  var t_code = "DE";
  var user = getCookie(cname);

//sende Daten an addWord
    xhttp.open("GET", "../../../../backend/functions/addWord.php", true);
    xhttp.send();

 }
