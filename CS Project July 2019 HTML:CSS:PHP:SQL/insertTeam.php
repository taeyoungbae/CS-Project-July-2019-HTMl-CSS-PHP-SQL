<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "BigBrotherBasketball";

$TeamName=$_REQUEST['teamName'];
$Wins=$_REQUEST['wins'];
$Losses=$_REQUEST['losses'];

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
$query = "INSERT INTO team(Team_Name, Wins, Losses)
VALUES('$TeamName','$Wins','$Losses')";

//Execute the query
if ($conn->query($query) == TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
