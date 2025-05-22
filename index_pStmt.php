<?php

require_once 'config.db.php';
require_once 'lib.php';

echo 'Fertig!!';

if(isset($_POST['frm_save'])){
    if(gb_function($_POST['frm_name'],$_POST['frm_msg'])){
        echo 'Der Eintrag wurde erfolgreich hinzugefügt.';
    }
}


?>

<h1>Gästebuch</h1>
<h2>Letzte Einträge</h2>

<?php
//query-statement nur wenn keine persönlichen daten 
$query = "SELECT name, nachricht FROM daybook ORDER BY daybook_id DESC LIMIT 3";
$result = $mysqli->query($query);
while($row = $result->fetch_assoc()){
    echo '<hr><b>' . htmlspecialchars($row['name']) . '</b>: '. htmlspecialchars($row['nachricht']) . '<br>';
}
?>

<h2>Neuer Eintrag</h2>
<form method="POST">

    Name: <input type="text" name="frm_name"><br>
    Nachricht: <textarea type="text" name="frm_msg"></textarea><br>
    <input type="submit" value="Senden" name="frm_save">
</form>