<?php
//query-statement nur wenn keine persönlichen daten abgefragt werden

if(isset($_POST['frm_save'])){
    if(gb_function($_POST['frm_name'],$_POST['frm_msg'])){
        //echo 'Der Eintrag wurde erfolgreich hinzugefügt.';
    }
}

$query = "SELECT name, nachricht, daybook_id FROM daybook ORDER BY daybook_id DESC LIMIT 20";
$result = $mysqli->query($query);

while($row = $result->fetch_assoc()){
    //hier wird die VErbindung zur 'id'gesetzt:
    //wir sagen 'id' ist gleich die 'daybook_id' 
    echo '<hr><a href="?id='.$row['daybook_id'].'">#'.$row['daybook_id'].'</a>'.htmlspecialchars($row['name']).'<br>';
}


?>

