<?php
$username = $_GET['username'];
$name = $_GET['name'];
$lastname = $_GET['lastname'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$mt = $_GET['mt'];
$nl = $_GET['nl'];
$pwhash = password_hash($_GET['pw'], PASSWORD_DEFAULT);
$homecity = $_GET['homecity'];

require_once("../inc/db.php");

$db->query("SET NAMES 'utf8'");
$sql = "INSERT INTO user (username, name, lastname, mail, age, mt, nl, pwhash, homecity)
VALUES ('{$username}', '{$name}', '{$lastname}', '{$mail}', '{$age}', '{$mt}', '{$nl}', '{$pwhash}', '{$homecity}')";
$erg = $db->query($sql);
    if (!$erg){
    die ('Etwas stimmte mit der Abfrage nicht: '.$db->error);
  }
  else{
    $success = true;
  }

  $empfaenger = $mail;
  $betreff = 'Herzlich Willkommen';
  $nachricht = 'Hallo '.$name.',<br /><br />Wir begrüßen dich herzlich und danken dir, dass du dich bei WordShare registriert hast. <br />
  Wir freuen uns sehr darüber, dass du WordShare mit deinen Ideen bereichern wirst. <br />
  Außerdem bitten wir dich, zu bedenken, dass die App von Nutzern erstellt wurde und diese seriös zu behandeln ist. <br />
  Wir wünschen dir viel Spaß beim Hinzufügen neuer Vokabeln und beim entspannten Erlernen einer neuen Sprache. <br />
  Bis gleich! <br />
  Dein WordShare-Team' ;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: <Team@WordShare.com>' . "\r\n";

  mail($empfaenger, $betreff, $nachricht, $header);
  #Erfolg?
  if($success == true) print("1");
  else print("0");
 ?>
