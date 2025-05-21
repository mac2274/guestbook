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

<script>
    if (hallo()) {
  console.log("Fertig");
}

function hallo() {
let x = true;
  if (x == true) {
    console.log("ICH BIN WAHR!");
    return true;
  } else if (x == false) {
    console.log("ICH BIN FALSCH!");
    return false;
  }
}
</script>

<form method="POST">

    Name: <input type="text" name="frm_name"><br>
    Nachricht: <textarea type="text" name="frm_msg"></textarea><br>
    <input type="submit" value="Senden" name="frm_save">
</form>