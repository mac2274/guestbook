<?php

require_once 'config.db.php';
require_once 'lib.php';
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

<?php

if(empty($_GET['id'])){
    require 'form.db.php'; 
    echo '<h2>Letzte Einträge</h2>';
    require 'query.php';
} else {
    require 'prepared.php';
}
?>