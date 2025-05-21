<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli('db', 'test_kontaktform', 'p]YOo(u]7F1.IbPv', 'guessbook');
// vorher Problem weil localhost falsch war durch die Nutzung von Docker
if($mysqli -> connect_errno){
    throw new RuntimeException('mysqli-Verbindungsfehler: ' . $mysqli->connect_error);
//  else{
//     echo "passt immernoch!";
}

?>
