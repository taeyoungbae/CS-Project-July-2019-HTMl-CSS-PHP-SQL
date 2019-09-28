<?php
include 'connect.php';


$ownerName = $_REQUEST['ownerName'];]

$conn = OpenCon();
$sql = "update Owner set Owner_Name = '$ownerName' where customerid = '$id'";
if ($conn->query($sql) === TRUE) {
 echo "Record updated successfully";
} else {
 echo "Error updating record: " . $conn->error;
}
 ?>
