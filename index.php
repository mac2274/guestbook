<?php

require_once 'config.db.php';
require_once 'lib.php';

//echo 'Fertig!!';
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