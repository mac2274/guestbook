<?php
//query-statement nur wenn keine persönlichen daten abgefragt werden

$query = "SELECT name, nachricht FROM daybook ORDER BY daybook_id DESC LIMIT 3";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    echo '<hr><b>' . htmlspecialchars($row['name']) . '</b>: '. htmlspecialchars($row['nachricht']) . '<br>';
}
?>