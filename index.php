<?php

require_once 'config.db.php';
require_once 'lib.php';

echo 'Fertig!!';

if(isset($_POST['frm_save'])){
    echo 'start';
    echo gb_function($_POST['frm_name'],$_POST['frm_msg']);
    echo 'ende';
}
?>

<form method="POST">

    Name: <input type="text" name="frm_name"><br>
    Nachricht: <textarea type="text" name="frm_msg"></textarea><br>
    <input type="submit" value="Senden" name="frm_save">
</form>