<?php
//query-statement nur wenn keine persönlichen daten abgefragt werden

if(isset($_POST['frm_save'])){
    if(gb_function($_POST['frm_name'],$_POST['frm_msg'])){
        echo 'Der Eintrag wurde erfolgreich hinzugefügt.';
    }
}

$query = "SELECT name, nachricht FROM daybook ORDER BY daybook_id DESC LIMIT 3";
$result = $mysqli->query($query);

?>