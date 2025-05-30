<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM daybook WHERE daybook_id=?"; // hier SELECT einer ID!!

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if (!$stmt->errno) {
            //handle error here
        }
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            echo '<hr><b><a href="?id=' . $row['daybook_id'].'">#' . $row['daybook_id'].'</a> '.htmlspecialchars($row['name']).'</b>: <br>';
            echo htmlspecialchars($row['nachricht']).'<br>';
            echo $row['datum'];
        }
    }
}


?>