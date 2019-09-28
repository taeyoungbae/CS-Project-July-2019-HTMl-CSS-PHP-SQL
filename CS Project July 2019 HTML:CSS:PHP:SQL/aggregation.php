<?php
include 'connect.php';
$conn = OpenCon();
$teamName=$_REQUEST['teamName'];
$sql = "SELECT MAX(PPG) AS Team_Name FROM
Player WHERE Team_Name = '$teamName'" or die($conn->error);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table><tr><th class='border-class'>PPG</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
 echo "<tr><td class='borderclass'>".$row["Team_Name"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
CloseCon($conn);
?>

<!-- Error message reads: "Trying to get property of non-object in /Applications/XAMPP/xamppfiles/htdocs/ProjectDemo/aggregation.php on line 8
0 results" -->
