<?php
global $conn;
include "../db.php";
$user = $_POST["name"];
$sql = "DELETE FROM demo_table WHERE Name = '$user'";
$response = $conn->query($sql);
if (!$response){
    echo "unable to delete $user";
}
echo "$user successfully deleted!";
$conn->close();
header("location: index.php");

