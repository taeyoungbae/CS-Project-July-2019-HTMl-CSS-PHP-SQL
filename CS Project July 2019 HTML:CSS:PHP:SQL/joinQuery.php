<?php
include 'connect.php';
$conn = OpenCon();
$ppgPlayer=$_REQUEST['ppgPlayer'];
$sql = "SELECT p.Player_Name, p.PPG FROM Player p, Team t
WHERE p.Team_Name=t.Team_Name AND t.Wins>=$ppgPlayer";
$result = $conn->query($sql) or die($conn->error);
// echo $result;
if ($result->num_rows > 0) {
echo "<table><tr><th class='border-class'>p.Player_Name</th><th
class='border-class'>p.PPG</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
 echo "<tr><td class='borderclass'>".$row["Player_Name"]."</td>
 <td class='borderclass'>".$row["PPG"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
CloseCon($conn);
?>

<!-- Multiple errors that read: "Undefined index: p.Player_Name in /Applications/XAMPP/xamppfiles/htdocs/ProjectDemo/joinQuery.php on line 13"
and "Undefined index: p.PPG in /Applications/XAMPP/xamppfiles/htdocs/ProjectDemo/joinQuery.php on line 13" -->
