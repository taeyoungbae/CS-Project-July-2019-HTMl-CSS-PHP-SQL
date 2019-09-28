<?php
include 'connect.php';
$conn = OpenCon();
$minimumPPG=$_REQUEST['minimumPPG'];
$sql = "SELECT Player_Name, Team_Name, PPG, Assist,
Rebounds, Steals, Turnovers
FROM Player WHERE PPG > $minimumPPG";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr><th class='border-class'>Player_Name</th><th
class='border-class'>Team_Name</th>
<th class='borderclass'>PPG</th></tr>
<th class='borderclass'>Assist</th></tr>
<th class='borderclass'>Rebounds</th>
</tr><th class='borderclass'>Steals</th></tr>
<th class='borderclass'>Turnovers</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
 echo "<tr><td class='borderclass'>".$row["Player_Name"]."</td>
 <td class='borderclass'>".$row["Team_Name"]."</td>
 <td class='borderclass'>".$row["PPG"]."</td>
 <td class='borderclass'>".$row["Assist"]."</td>
 <td class='borderclass'>".$row["Rebounds"]."</td>
 <td class='borderclass'>".$row["Steals"]."</td>
 <td class='borderclass'>".$row["Turnovers"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
CloseCon($conn);
?>
