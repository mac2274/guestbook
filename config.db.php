<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli('localhost', 'guestbook', '*YAVm*5f5@g6K3Zz', 'guestbook');

if($mysqli -> connect_errno){
    throw new RuntimeException('mysqli-Verbindungsfehler: ' . $mysqli->connect_error);
}

?>