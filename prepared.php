<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql = "SELECT * FROM daybook WHERE daybook_id=?";

    if($stmt = $conn->prepare($sql)){
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
?>