<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    echo $id;

    $sql = "SELECT * FROM daybook WHERE daybook_id=?";

    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("i",$id);
        $stmt->execute();

        if(!$stmt->errno){
            //handle error here
        }
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            echo $row['nachricht'];
        }
    }
}

while($row = $result->fetch_assoc()){
    echo 'top';
    echo '<hr><a href="?id=' .$row['daybook_id'].'">#'.$row['daybook_id'].'</a><b>'. htmlspecialchars($row['name']).'</b>:'. htmlspecialchars($row['nachricht']).'<br>';
    echo 'hallo';
}
?>