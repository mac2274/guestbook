<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli('localhost/3303', 'guestbook', 'c9TSmtc-kS)qw(1@', 'guessbook');

if($mysqli -> connect_errno){
    throw new RuntimeException('mysqli-Verbindungsfehler: ' . $mysqli->connect_error);
}

?>