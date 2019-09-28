<?php
include 'connect.php';

$teamname = $_REQUEST['Team_Name'];
$wins = $_REQUEST['Wins'];
$losses = $_REQUEST['Losses'];

$conn = OpenCon();
$sql = "delete team where Team_Name = '$teamname'";
if ($conn->query($sql) === TRUE) {
 echo "Record updated successfully";
} else {
 echo "Error updating record: " . $conn->error;
}
 ?>
