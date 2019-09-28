<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "BigBrotherBasketball";

$oldOwnerName=$_REQUEST['oldOwnerName'];
$newOwnerName=$_REQUEST['newOwnerName'];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connection Succesful! <br>";
}
//construct the query
$query = "update Owner set Owner_Name = '$newOwnerName'
where Owner_Name = '$oldOwnerName'";

//Execute the query
if ($conn->query($query) == TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
