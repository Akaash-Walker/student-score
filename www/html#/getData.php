<?php
global $conn;
include "../db.php";
$sql = "select * from demo_table";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $row["Name"] . "</td>";
    echo "<td>" . $row["Score"] . "</td>";
    echo "<tr>";
}
$conn->close();