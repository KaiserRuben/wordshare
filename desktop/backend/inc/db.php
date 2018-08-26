<?php
error_reporting(E_ALL);
$host = "rdbms.strato.de";
$usrdb ="U3474106";
$pwdb = "wordshare18";
$dbname = "DB3474106";
$db = new mysqli($host, $usrdb, $pwdb, $dbname);
print_r ($db->connect_error);
if ($db->connect_errno) {
    die('Sorry - gerade gibt es ein Problem mit der Datenbankverbindung, wir arbeiten daran...');
}

?>
