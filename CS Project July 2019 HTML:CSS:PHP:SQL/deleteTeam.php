<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "BigBrotherBasketball";

$deleteTeamName=$_REQUEST['deleteTeamName'];


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
$query = "delete from Team where Team_Name = '$deleteTeamName'";

//Execute the query
if ($conn->query($query) == TRUE) {
    echo "Deleted successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
