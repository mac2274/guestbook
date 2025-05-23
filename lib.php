<?php

class DDDatabaseException extends Exception {
}

function gb_function($name, $nachricht){
//diese Funktion setzt die prepared Statement für das Datenhinzufügen

    global $mysqli;
    $q = "INSERT INTO daybook SET name = ?, nachricht = ?;"; 
    $statement = $mysqli->prepare($q);
    if (!$statement) {
        throw new DDDatabaseException($mysqli->error);
    }
    $statement->bind_param('ss', $name, $nachricht);
    if (!$statement->execute()) {
        throw new DDDatabaseException($statement->error);
    }
    #printf("Datenätze eingefügt: %d.\n", $statement->affected_rows);
    return $statement->affected_rows;
    }

?>