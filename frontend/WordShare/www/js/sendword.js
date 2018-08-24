function sendword() {
#get Eingaben des Benutzers
  var word  = document.getElementById('word');
  var transword  = document.getElementById('translation');
  var w_code = "en";
  var t_code = "de";
  var creator_id = 1;

#sende Daten an addWord
    xhttp.open("GET", "../../../../backend/functions/addWord.php", true);
    xhttp.send();

 }
