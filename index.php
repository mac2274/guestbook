<?php

require_once 'config.db.php';
require_once 'lib.php';

//echo 'Fertig!!';

// $x = false;

// if($x=false){
//     require 'query.php';
// } else if ($x=true){
//     require 'prepared.php';
// }



//query-statement nur wenn keine persönlichen daten abgefragt werden

// if(isset($_POST['frm_save'])){
//     if(gb_function($_POST['frm_name'],$_POST['frm_msg'])){
//         echo 'Der Eintrag wurde erfolgreich hinzugefügt.';
//     }
// }

// $query = "SELECT name, nachricht FROM daybook ORDER BY daybook_id DESC LIMIT 3";
// $result = $mysqli->query($query);

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "SELECT * FROM daybook WHERE daybook_id=?";

    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("i",$id);
        $stmt->execute();

        if(!$stmt->errno){
            //handle error here
        }
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            echo $row['name'];
        }
    }
}

while($row = $result->fetch_assoc()){
    echo '<hr><a href="?id='.$row['daybook_id'].'">#'.$row['daybook_id'].'</a><b>'. htmlspecialchars($row['name']) . '</b>: '. htmlspecialchars($row['nachricht']) . '<br>';
}
?>

<!-- <script>
//kurzer Abstecher in die logit von (!ausage)
if (!hallo()) {
  console.log("Fertig");
}

function hallo() {
let x = false;
  if (x == true) {
    console.log("ICH BIN WAHR!");
    return true;
  } else if (x == false) {
    console.log("ICH BIN FALSCH!");
    return false;
  }
}
</script> -->

<h1>Gästebuch</h1>
<h2>Letzte Einträge</h2>

<h2>Neuer Eintrag</h2>
<form method="POST">

    Name: <input type="text" name="frm_name"><br>
    Nachricht: <textarea type="text" name="frm_msg"></textarea><br>
    <input type="submit" value="Senden" name="frm_save">
</form>