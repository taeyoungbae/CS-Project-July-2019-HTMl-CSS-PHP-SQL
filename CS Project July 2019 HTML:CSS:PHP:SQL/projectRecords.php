<?php
include 'connect.php';
$conn = OpenCon();
$projectionCoachName=$_REQUEST['projectionCoachName'];
$sql = "SELECT Wins, Losses FROM Coach
WHERE Coach_Name = '$projectionCoachName'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr><th class='border-class'>Wins</th><th
class='border-class'>Losses</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
 echo "<tr><td class='borderclass'>".$row["Wins"]."</td>
 <td class='borderclass'>".$row["Losses"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
CloseCon($conn);
?>

<!-- Error message reads: Notice: "Trying to get property of non-object in /Applications/XAMPP/xamppfiles/htdocs/ProjectDemo/projectRecords.php on line 7
0 results" -->
