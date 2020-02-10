<?php
include("Tarea.php");
$result=index();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - id: " . $row["tareas"]. " " . $row["prioridad"]. "<br>";
    }
} else {
    echo "0 results";
}
?>